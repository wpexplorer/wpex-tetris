<?php
/**
 * The template for displaying the footer and closing elements starting in header.php
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */ ?>

	<div class="clear"></div>

</div><!-- /main-content -->

	<div id="footer-wrap">
		<footer id="footer">
			<div id="footer-widgets" class="clearfix">
				<div class="footer-box">
					<?php dynamic_sidebar('footer-one'); ?>
				</div><!-- /footer-box -->
				<div class="footer-box">
					<?php dynamic_sidebar('footer-two'); ?>
				</div><!-- /footer-box -->
				<div class="footer-box remove-margin">
					<?php dynamic_sidebar('footer-three'); ?>
				</div><!-- /footer-box -->
			</div><!-- /footer-widgets -->
		</footer><!-- /footer -->
	</div><!-- /footer-wrap -->

	<div id="copyright">
		<?php
		if ( $copy = get_theme_mod( 'wpex_copyright' ) ) {
			echo $copy;
		} else {
			echo 'Powered by <a href="https://www.wordpress.org" title="WordPress" target="_blank">WordPress</a> and <a href="http://www.wpexplorer.com/tetris-wordpress-theme/" target="_blank" title="Tetris WordPress Theme" rel="nofollow">Tetris WordPress Theme</a> by <a href="http://themeforest.net/user/wpexplorer?ref=WPExplorer" title="WPExplorer">WPExplorer</a>';
		} ?>
	</div>

</div><!-- /wrap -->

<?php wp_footer(); // Footer hook, do not delete, ever ?>

</body>
</html>