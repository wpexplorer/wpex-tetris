<?php
/**
 * Search Entry
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) return;
	
//start loop
while ( have_posts() ) : the_post(); ?>

	<article <?php post_class('search-entry clearfix'); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="search-entry-image">
				<a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			</div><!-- .search-entry-image -->
			<div class="search-entry-text">
		<?php endif; ?>
			<header>
				<h2><a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<?php wpex_excerpt(); ?>
		<?php if ( has_post_thumbnail() ) echo '<div><!-- .search-entry-text -->'; ?>
	</article><!-- .entry -->

<?php endwhile; ?>