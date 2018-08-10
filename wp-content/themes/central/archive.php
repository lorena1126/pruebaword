<?php /* the template for displaying archive pages */
get_header();
get_sidebar(); ?>
<div id="content" role="main">
	<?php if ( have_posts() ) : ?>
		<div class="post">
			<div class="block-header">
				<h2 class="page-title">
					<?php the_archive_title(); ?>
				</h2><!-- .page-title -->
			</div><!-- .block-header-->
		</div><!-- .post -->
		<?php /* show page navigation */
		central_content_nav( 'nav-above' );
		/* start the loop */
		while ( have_posts() ) : the_post(); ?>
			<div <?php post_class(); ?>>
				<?php /* show post thumbnail */
				if ( has_post_thumbnail() ) : ?>
					<div class="left-top"></div>
					<div class="right-top"></div>
					<div class="featured-image">
						<?php the_post_thumbnail( 'post-thumb' ); ?>
					</div>
					<div class="featured-image-title">
						<?php central_featured_img_title(); ?>
					</div>
				<?php endif; ?>
				<div class="block-header">
					<a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php if ( comments_open() ) { /* show link to leave replay */
						comments_popup_link( __( 'Leave a reply', 'central' ), __( '1 Reply', 'central' ), __( '% Replies', 'central' ), 'leave-reply' );
					}; ?>
				</div><!-- .block-header -->
				<p class="post-date">
					<?php /* show the date publication of current post and categories */
					_e( 'Posted on ', 'central' ); ?>
					<a href="<?php the_permalink( get_the_ID() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><span id="date"><?php echo get_the_date(); ?></span></a>
					<?php if ( has_category() ) {
						_e( ' in ', 'central' );
						the_category( ', ' );
					} ?>
				</p>
				<!-- show the excerpt of post -->
				<div class="post-text">
					<?php if ( has_excerpt() ) {
						the_excerpt();
					} else {
						the_content( __( 'Continue reading', 'central' ) . ' &rarr;' );
					}
					/* show link pages of current post */
					wp_link_pages( array(
						'before' => '<div class="page-link"><span>' . __( 'Pages:', 'central' ) . '</span>',
						'after'  => '</div>',
					) );
					/* show "edit" link */
					edit_post_link( __( 'Edit post', 'central' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .post-text -->
				<div class="clear"></div>
				<!-- show tags and anchor -->
				<div class="more-links">
					<?php if ( has_tag() ) {
						the_tags( '<span class="tag-image"></span>', ', ', '' );
					} ?>
					<a class="anchor" href="javascript:scroll(0,0);">[<?php _e( 'Top', 'central' ); ?>]</a>
				</div>
				<div class="clear"></div>
			</div><!-- .post -->
		<?php endwhile;
		/* end the loop
			show page navigation */
		central_content_nav( 'nav-below' );
	else : ?>
		<div class="post">
			<?php /* if no posts in this archive */
			_e( 'Nothing found in this archive', 'central' ); ?>
		</div>
	<?php endif; ?>
</div><!-- #content -->
<?php get_footer();
