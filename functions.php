<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) return;

/**
 * Include files
 *
 * @since 1.0.0
 */
$dir = get_template_directory();

require_once( $dir .'/inc/social-links.php' );
require_once( $dir .'/inc/theme-customizer.php' );
require_once( $dir .'/inc/classes/gallery-metabox/gallery-metabox.php' );
require_once( $dir .'/inc/scripts.php' );
require_once( $dir .'/inc/widget-areas.php' );
require_once( $dir .'/inc/widget-social.php' );
if ( is_admin() ) {
	require_once( $dir .'/inc/updates.php' );
	require_once( $dir .'/inc/cmb2-init.php' );
	require_once( $dir .'/inc/welcome.php' );
	require_once( $dir .'/inc/dashboard-feed.php' );
} else {
	require_once( $dir .'/inc/comments.php' );
}

/**
 * Theme setup
 *
 * @since 1.0.0
 */
function wpex_setup() {

	// Global content width var
	global $content_width;
	$content_width = 970;
	
	//theme support
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	// Add image size
	add_image_size( 'wpex-entry', '370', '9999', false );
	add_image_size( 'wpex-post', '960', '9999', false );
	
	// Menu
	register_nav_menus ( array(
		'main_menu'	=> __( 'Main', 'tetris' ),
	) );

	// Add Post Formats Support
	add_theme_support( 'post-formats', array( 'video', 'quote', 'link', 'audio', 'image', 'gallery' ) );

	//Localization support
	load_theme_textdomain( 'tetris', get_template_directory() .'/languages' );

}
add_action( 'after_setup_theme', 'wpex_setup' );

/**
 * Returns escaped post title
 *
 * @since 1.2.0
 */
function wpex_get_esc_title() {
	return esc_attr( the_title_attribute( 'echo=0' ) );
}

/**
 * Outputs escaped post title
 *
 * @since 1.2.0
 */
function wpex_esc_title() {
	echo wpex_get_esc_title();
}

/**
 * Move comment form fields
 *
 * @since 1.2.0
 */
function wpex_move_comment_form_fields( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
add_filter( 'comment_form_fields', 'wpex_move_comment_form_fields' );

/**
 * Replace Soliloquy affiliate
 *
 * @since 1.0.0
 */
function wpex_affiliate_url() {
	return 'http://www.wpexplorer.com/soliloquy-wordpress-plugin';
}
add_filter( 'tgmsp_affiliate_url', 'wpex_affiliate_url' );

/**
 * Change default read more
 *
 * @since 1.0.0
 */
function wpex_new_excerpt_more($more) {
	global $post;
	return '...';
}
add_filter( 'excerpt_more', 'wpex_new_excerpt_more' );

/**
 * Creates custom excerpts
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'wpex_excerpt' ) ) {
	function wpex_excerpt( $length = '20', $readmore = false ) {
		global $post;
		$id = $post->ID;
		$length = apply_filters( 'wpex_excerpt_length', $length );
		if ( has_excerpt( $id ) ) {
			$output = $post->post_excerpt;
		} else {
			$output = wp_trim_words( strip_shortcodes( get_the_content( $id ) ), $length);
			if ( $readmore == true ) {
				$readmore_link = '<span class="wpex-readmore"><a href="'. get_permalink( $id ) .'" title="'. __( 'continue reading', 'tetris' ) .'" rel="bookmark">'. __( 'Read more', 'tetris' ) .' &rarr;</a></span>';
				$output .= apply_filters( 'wpex_readmore_link', $readmore_link );
			}
		}
		echo $output;
	}
}

/**
 * Default pagination
 *
 * @since 1.0.0
 */
function wpex_pagination( $pages = '', $range = 4 ) {
	 $showitems = ($range * 2)+1; 
	 global $paged;
	 if ( empty( $paged ) ) $paged = 1;
	 if ( $pages == '') {
		 global $wp_query;
		 $pages = $wp_query->max_num_pages;
		 if ( !$pages ) {
			 $pages = 1;
		 }
	 }
	 if ( 1 != $pages) {
		 echo "<div class=\"page-pagination\"><div class=\"page-pagination-inner clearfix\">";
		 echo "<div class=\"page-of-page\"><span class=\"inner\">".$paged." of ".$pages."</span></div>"; 
		 for ($i=1; $i <= $pages; $i++) {
			 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			 {
				 echo ($paged == $i)? "<span class=\"current outer\"><span class=\"inner\">".$i."</span></span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\"><span class=\"inner\">".$i."</span></a>";
			 }
		 }
		echo "</div></div>\n";
	 }
}