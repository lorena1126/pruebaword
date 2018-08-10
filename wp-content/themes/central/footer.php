<?php /*the template to displaying footer */ ?>
</div><!-- .main-->
<div class="clear"></div>
<div class="footer-spacer"></div>
</div><!-- .page-wrapper -->
<div class="bottom-white-stripe">
	<div class="main footer">
		<span id="copyright">&copy; <?php echo date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?>&nbsp;<a href="<?php echo esc_url( wp_get_theme()->get( 'AuthorURI' ) ); ?>" target="blank">BestWebLayout</a></span>
	</div><!-- .main footer -->
</div><!-- .bottom-white-stripe -->
<?php wp_footer(); ?>
</body>
</html>
