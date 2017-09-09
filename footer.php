<?php
/**
 * The template for displaying the footer and closing elements starting in header.php
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	return;
} ?>

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
			echo wp_kses_post( $copy );
		} else {
			printf( esc_html__( 'Theme by %1$s Powered by %2$s', 'tetris' ), '<a href="http://www.wpexplorer.com/" target="_blank" title="WPExplorer">WPExplorer</a>', '<a href="http://wordpress.org/" target="_blank" title="WordPress.org">WordPress</a>' );
		} ?>
	</div>

</div><!-- /wrap -->

<?php wp_footer(); // Footer hook, do not delete, ever ?>

</body>
</html>