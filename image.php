<?php
/**
 * Image attachment page
 *
 * @package   Testris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

get_header(); ?>

	<div id="page-heading">
		<h1><?php the_title(); ?></h1>	
	</div><!-- /page-heading -->

	<div id="img-attch-page" class="clearfix">
		<?php echo wp_get_attachment_image( $post->ID, 'full' ); ?>
	</div><!-- #img-attch-page -->

<?php get_footer(); ?>