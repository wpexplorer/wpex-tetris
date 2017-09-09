<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package   Testris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

get_header();

if ( have_posts()) : while (have_posts() ) : the_post(); ?>

	<?php
	// Show featured image
	if ( has_post_thumbnail( get_the_ID() ) ) : ?>
		<div id="page-featured-img"><?php the_post_thumbnail( 'full' ); ?></div>
	<?php endif; ?>

	<div id="page-heading"><h1><?php the_title(); ?></h1></div><!-- /page-heading -->

	<div id="single-page-content" class="container sidebar-bg clearfix">

		<article id="post" class="clearfix">
			<div class="entry clearfix">	
				<?php the_content(); ?>
			</div><!-- .entry -->         
			<?php comments_template(); ?>
		</article><!-- #post -->

		<?php get_sidebar();?>

	</div><!-- #single-page-content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>