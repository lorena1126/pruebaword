<?php /* template to displaying a single post*/
get_header();
get_sidebar(); ?>
<div id="content" role="main">
	<?php if ( have_posts() ) : the_post(); ?>
		<div class="post">
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
			<div class="nav-single">
				<span class="nav-previous"><?php previous_post_link( '%link', '&larr; %title' ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', '%title &rarr;' ); ?></span>
			</div><!-- .nav-single -->
			<div class="clear"></div>
			<div class="block-header">
				<h2><?php the_title(); ?></h2>
			</div>
			<p class="post-date"><?php /* show date navigation and categories of current post */
				_e( 'Posted on ', 'central' ); ?>
				<a href="<?php echo get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ); ?>" title="<?php the_title(); ?>" rel="bookmark"><span id="date"><?php the_date(); ?></span></a>
				<?php if ( has_category() ) {
					_e( ' in ', 'central' );
					the_category( ', ' );
				} ?>
			</p>
			<div class="post-text">
				<?php /* show content of the current post */
				the_content();
				/* show link pages */
				wp_link_pages( array(
					'before' => '<div class="page-link"><span>' . __( 'Pages:', 'central' ) . '</span>',
					'after'  => '</div>',
				) );
				/* show "edit" link */
				edit_post_link( __( 'Edit post', 'central' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .post-text -->
			<div class="clear"></div>
			<?php comments_template( '', true ); ?>
			<div class="more-links">
				<?php /* show the tags and anchor */
				if ( has_tag() ) {
					the_tags( '<span class="tag-image"></span>', ', ', '' );
				} ?>
				<a class="anchor" href="javascript:scroll(0,0);">[<?php _e( 'Top', 'central' ); ?>]</a>
			</div>
		</div><!-- .post -->
	<?php endif; ?>
</div><!-- #content -->
<?php get_footer();
