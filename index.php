<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

get_header(); ?>

	<?php if ( ! is_home() ) : ?>
		<header id="page-heading" class="clearfix">
			<h1><?php if ( is_category() ) {
					single_cat_title();
				} else {
					the_archive_title();
			} ?></h1>
		</header>
	<?php endif; ?>

<?php if ( have_posts() ) : ?>

	<div id="blog-wrap" class="blog-isotope clearfix">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );   
		endwhile; ?>           
	</div><!-- #blog-wrap -->

	<?php wpex_pagination(); ?>

<?php endif; ?>

<?php get_footer(); ?>