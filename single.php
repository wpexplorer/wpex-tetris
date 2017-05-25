<?php
/**
 * The Template for displaying all single posts.
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

get_header();

if ( have_posts()) : while ( have_posts()) : the_post(); ?>

	<?php
	// Display media
	if ( 'quote' != get_post_format() ) {
		get_template_part( 'content', get_post_format() ); 
	} ?>

	<div id="single-post-content" class="sidebar-bg container clearfix">
		
		<div id="post" class="clearfix">

			<?php
			// Show header on all post formats except quotes
			if ( 'quote' != get_post_format() ) : ?>
				<header id="post-header">
					<h1><?php the_title(); ?></h1>
					<ul class="meta clearfix">
						<li><strong>Posted on:</strong> <?php echo get_the_date(); ?></li>
						<li><strong>Under:</strong> <?php the_category( ',' ); ?></li>
						<li><strong>By:</strong> <?php the_author_posts_link(); ?></li>   
						<?php if ( comments_open() ) : ?>
							<li class="comment-scroll"><strong>With:</strong> <?php comments_popup_link(__('0 Comments', 'tetris'), __('1 Comment', 'tetris'), __('% Comments', 'tetris'), 'comments-link' ); ?></li>
						<?php endif; ?>
					</ul><!-- .meta -->
				</header><!-- #post-header -->
			<?php endif; ?>

			<article <?php post_class('entry clearfix fitvids'); ?>>
				<div class="inner-post">
					<?php the_content(); // This is your main post content output ?>
					<?php if ( get_post_format() == 'quote' ){ ?>
						<div class="quote-author">&#8211; <?php the_title(); ?></div>
					<?php } ?>
				</div><!-- .inner-post -->
			</article><!-- .entry -->

			<?php wp_link_pages();?>

			<?php the_tags( '<div id="post-tags" class="clearfix">', '', '</div>' ); ?>

			<?php
			// Show author bio on all post formats except quotes
			if ( get_post_format() !== 'quote' ) : ?>
				<div id="single-author" class="clearfix">
					<h4 class="heading"><span><?php the_author_posts_link(); ?></span></h4>
					<div id="author-image">
					   <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar( get_the_author_meta('user_email'), '45', '' ); ?></a>
					</div><!-- #author-image -->
					<div id="author-bio">
						<p><?php the_author_meta('description'); ?></p>
					</div><!-- #author-bio -->
				</div><!-- #single-author -->
			<?php endif; ?>

			<?php comments_template(); ?>

		</div><!-- post -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- #single-post-content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>