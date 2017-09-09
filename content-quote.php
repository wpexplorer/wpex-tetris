<?php
/**
 * Quote Format
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

<article <?php post_class('blog-entry clearfix'); ?>>  
	<div class="entry-text clearfix">
		<div class="quote-content">
			<?php the_content(); ?><div class="quote-author">&#8211; <?php the_title(); ?></div>
		</div><!-- .quote-content -->
	</div><!-- .blog-entry-text-->
</article><!-- .blog-entry -->