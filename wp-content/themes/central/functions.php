<?php
/* set the content width based on the theme's design and stylesheet */
if ( ! isset( $content_width ) ) {
	$content_width = 560;
}

/* sets up the theme by registering support for various features in WordPress, such as post thumbnails, navigation menus, and the like */
function central_setup() {
	/* load_theme_textdomain() for translation/localization support */
	load_theme_textdomain( 'central', get_template_directory() . '/languages' );
	/* add_editor_style() to style the visual editor */
	add_editor_style();
	add_theme_support( 'title-tag' );
	/* add_theme_support() to add support for post thumbnails, automatic feed links, custom headers, backgrounds, menus and post formats */
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array(
		'aside',
		'link',
		'gallery',
		'status',
		'quote',
		'image',
		'video',
		'audio',
		'chat',
	) );
	add_theme_support( 'menus' );
	/* register_nav_menus() to add support for navigation menus*/
	register_nav_menu( 'main', __( 'main menu', 'central' ) );
	/* add_action for include stylesheets and javascripts of theme */
	add_theme_support( 'custom-background', array(
		'default-color' => 'f8f6f5',
	) );
	$args = array(
		'width'              => 940,
		'height'             => 220,
		'default-text-color' => '333',
		'uploads'            => true,
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	/* add_image_size() to custom image size */
	add_image_size( 'slider-thumb', 900, 218, true ); //for slider
	add_image_size( 'medium', 300, 300 ); //for gallery or another
	add_image_size( 'large', 500, 500 ); //for gallery or another
}

/* including the javascript of the theme */
function central_scripts() {
	wp_enqueue_style( 'central-style', get_stylesheet_uri() );
	wp_enqueue_script( 'central-html5', get_template_directory_uri() . '/js/html5.js' );
	wp_script_add_data( 'central-html5', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'central-jquery-shadow', get_template_directory_uri() . '/js/jquery.shadow.js', array( 'jquery' ) );
	wp_enqueue_script( 'central-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );
	$string_js = array(
		'chooseFile'      => __( 'Choose file...', 'central' ),
		'fileNotSelected' => __( 'No file chosen...', 'central' ),
		'blogName'        => get_bloginfo( 'name' ),
	);
	wp_localize_script( 'central-script', 'centralStringJs', $string_js );
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/* get wp_nav_menu() fallback, wp_page_menu(), to show a home link. */
function central_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ) {
		$args['show_home'] = true;
	}

	return $args;
}

/**
 * Sets up the theme customizer for slider settings.
 *
 * @param WP_Customize_Manager $wp_customize The Customizer object.
 */
function central_customize_register( $wp_customize ) {
	$categories = get_categories( array( 'hide_empty' => 0 ) );
	$cats       = array(
		0 => __( '&mdash; Disable slider &mdash;', 'central' ),
	);
	foreach ( $categories as $category ) {
		$cats[ $category->cat_ID ] = $category->name . ' (' . $category->category_count . ')';
	}

	$wp_customize->add_section( 'central_slider_settings', array(
		'title'       => __( 'Slider Settings', 'central' ),
		'priority'    => 150,
		'description' => __( 'Choose a category you want to display in the slider. All posts from this category with statuses "publish" and "draft" which have a featured image will be displayed in slides. Recommended featured image size for the slider is 900&times;218 pixels.', 'central' ),
	) );
	$wp_customize->add_setting( 'central_slider', array(
		'default'           => $cats[0],
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'cat_select_box', array(
		'settings' => 'central_slider',
		'label'    => __( 'Select Category:', 'central' ),
		'section'  => 'central_slider_settings',
		'type'     => 'select',
		'choices'  => $cats,
	) );
}

/* the template to displaying the slider*/
function central_slider_template() {
	global $wp_query;
	$slider_cat_id    = get_theme_mod( 'central_slider' );
	if ( 0 == $slider_cat_id ) {
		return;
	}
	/* save old value of variable wp_query */
	$original_query = $wp_query;
	/*add new and change value of variable wp_query*/
	$wp_query = null;
	$args     = array(
		'cat'            => $slider_cat_id,
		'post_status'    => array( 'publish', 'draft' ),
		'posts_per_page' => '-1',
		'meta_key' => '_thumbnail_id',
	);
	$wp_query = new WP_Query( $args );
	if ( $wp_query->have_posts() ) : ?>
		<div class="slider-wrap">
			<div class="slider">
				<!-- list of slides in the loop -->
				<ul class="slides">
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<li><!-- show featured image, title and text-content of slides -->
							<?php the_post_thumbnail( 'slider-thumb' ); ?>
							<div class="slider-pattern"></div>
							<p class="slider-title"><?php the_title(); ?></p>
							<?php add_filter( 'the_content', function ( $content ) {
								return preg_replace( '/<img[^>]+./', '', $content );
							} );
							the_content();
							remove_filter( 'the_content', function ( $content ) {
								return preg_replace( '/<img[^>]+./', '', $content );
							} ); ?>
						</li>
					<?php endwhile; ?>
				</ul>
				<!-- end the loop-->
			</div><!-- .slider -->
			<div class="slider-nav"></div>
		</div><!-- .slider-wrap -->
		<div class="clear"></div>
	<?php endif; /* restore the old value of variable wp_query*/
	$wp_query = null;
	$wp_query = $original_query;
	wp_reset_postdata();
}

/*register sidebar*/
function central_widget_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'central' ),
		'description'   => __( 'Left column to display the widgets', 'central' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}

/* show featured image title in posts */
function central_featured_img_title() {
	global $post;
	$thumbnail_id    = get_post_thumbnail_id( $post->ID );
	$thumbnail_image = get_posts( array( 'p' => $thumbnail_id, 'post_type' => 'attachment', 'post_status' => 'any' ) );
	if ( $thumbnail_image && isset( $thumbnail_image[0] ) ) {
		echo '<p>' . $thumbnail_image[0]->post_title . '</p>';
	}
}

/* returns a "Continue reading" link for excerpts */
function central_continue_reading_link() {
	return ' <a href="' . esc_url( get_permalink() ) . '">' . __( 'Continue reading', 'central' ) . ' &rarr;</a>';
}

/* replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and central_continue_reading_link() */
function central_auto_excerpt_more( $more ) {
	return ' &hellip;' . central_continue_reading_link();
}

/* adds a "Continue reading" link to custom post excerpts */
function central_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= central_continue_reading_link();
	}

	return $output;
}

/* template for comments and pingbacks */
function central_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
			// display trackbacks differently than normal comments ?>
			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p>
					<?php _e( 'Pingback: ', 'central' );
					comment_author_link();
					edit_comment_link( __( 'Edit', 'central' ), ' <span class="edit-link">[', ']</span>' ); ?>
				</p>
			</li>
			<?php break;
		default :
			// proceed with normal comments.
			global $post; ?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<article id="comment-<?php comment_ID(); ?>" class="comment">
					<header class="comment-meta comment-author vcard">
						<?php echo get_avatar( $comment, 44 );
						printf( '<cite class="fn">%1$s %2$s</cite>', get_comment_author_link(), ( $comment->user_id === $post->post_author ) ? ' <span>(' . __( 'Post author', 'central' ) . ')</span>' : '' );
						echo '</br>';
						printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
							esc_url( get_comment_link( $comment->comment_ID ) ),
							get_comment_time( 'c' ),
							/* translators: 1: date, 2: time */
							sprintf( __( '%1$s at %2$s', 'central' ), get_comment_date(), get_comment_time() )
						);
						edit_comment_link( __( 'Edit', 'central' ), ' <span class="edit-link">[', ']</span>' ); ?>
						<div class="clear"></div>
					</header><!-- .comment-meta -->
					<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'central' ); ?></p>
					<?php endif; ?>

					<section class="comment-content comment">
						<?php comment_text(); ?>
					</section><!-- .comment-content -->
					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array(
							'reply_text' => __( 'Reply', 'central' ),
							'after'      => ' <span>&darr;</span>',
							'depth'      => $depth,
							'max_depth'  => $args['max_depth'],
						) ) ); ?>
					</div><!-- .reply -->
				</article><!-- #comment-## -->
			</li>
			<?php break;
	endswitch; // end comment_type check
}

/* display navigation to next/previous pages when applicable */
function central_content_nav( $html_id ) {
	global $wp_query;
	if ( 1 < $wp_query->max_num_pages ) : ?>
		<div class="post">
			<div class="post-text">
				<nav id="<?php echo esc_attr( $html_id ); ?>">
					<div class="nav-previous">
						<?php next_posts_link( '&larr; ' . __( 'Older posts', 'central' ) ); ?>
					</div>
					<div class="nav-next">
						<?php previous_posts_link( __( 'Newer posts', 'central' ) . ' &rarr;' ); ?>
					</div>
				</nav><!-- #nav-above -->
			</div><!-- .post-text -->
		</div><!-- .post -->
	<?php endif;
}

/* add all hooks */
add_action( 'after_setup_theme', 'central_setup' );
add_action( 'wp_enqueue_scripts', 'central_scripts' );
add_filter( 'wp_page_menu_args', 'central_page_menu_args' );
add_action( 'widgets_init', 'central_widget_init' );
add_filter( 'excerpt_more', 'central_auto_excerpt_more' );
add_filter( 'get_the_excerpt', 'central_custom_excerpt_more' );
add_action( 'customize_register', 'central_customize_register' );
