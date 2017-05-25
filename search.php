<?php
/**
 * Rearch results
 *
 * @package   Testris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

get_header(); ?>

<header id="page-heading">
	<h1 id="archive-title"><?php _e( 'Search Results For', 'tetris' ); ?>: &quot;<?php the_search_query(); ?>&quot;</h1>
</header><!-- #page-heading -->

<div id="search-results-page" class="container sidebar-bg clearfix">
    <div id="post" class="clearfix">
		<?php
		if ( have_posts()) : 
			get_template_part( 'content', 'search');
		else :
			_e('Sorry, no results where found','tetris');
		endif; ?>
    </div><!-- .post  -->
	<?php get_sidebar(); ?>
</div><!-- .search-results-page -->

<?php wpex_pagination();?>

<?php get_footer(); ?>