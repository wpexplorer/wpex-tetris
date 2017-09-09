<?php
/**
 * Standard Format
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
}

if ( is_singular() ) { ?>

	<div id="post-thumbnail"><?php the_post_thumbnail( 'wpex-post' ); ?></div>

<?php } else { ?>

	<article <?php post_class('blog-entry clearfix'); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="blog-entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>"><?php the_post_thumbnail( 'wpex-entry' ); ?></a>
			</div><!-- /blog-entry-thumbnail -->
		<?php endif; ?>
		<div class="entry-text clearfix">
			<header>
				<h2><a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<?php wpex_excerpt(); ?>
			<ul class="entry-meta">
				<li><strong>Posted on:</strong> <?php echo get_the_date(); ?></li>
				<li><strong>By:</strong> <?php the_author_posts_link(); ?></li>   
				<?php if(comments_open()) { ?><li class="comment-scroll"><strong>With:</strong> <?php comments_popup_link(__('0 Comments', 'tetris'), __('1 Comment', 'tetris'), __('% Comments', 'tetris'), 'comments-link' ); ?></li><?php } ?>
			</ul><!-- /entry-meta -->
		</div><!-- /entry-text -->
	</article><!-- /blog-entry -->

<?php } ?>