<?php
/**
 * Array of social links
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

if ( ! function_exists( 'wpex_social_links' ) ) {
	function wpex_social_links() {
		return apply_filters( 'wpex_social_links_array', array(
			'addThis' => 'addThis',
			'behance' => 'behance',
			'blogger' => 'blogger',
			'delicious' => 'delicious',
			'deviantart' => 'deviantart',
			'digg' => 'digg',
			'dopplr' => 'dopplr',
			'dribbble' => 'dribbble',
			'evernote' => 'evernote',
			'facebook' => 'facebook',
			'flickr' => 'flickr',
			'forrst' => 'forrst',
			'gitHub' => 'gitHub',
			'google' => 'google',
			'grooveshark' => 'grooveshark',
			'instagram' => 'instagram',
			'lastfm' => 'lastfm',
			'linkedin' => 'linkedin',
			'myspace' => 'myspace',
			'pinterest' => 'pinterest',
			'paypal' => 'paypal',
			'picasa' => 'picasa',
			'pinterest' => 'pinterest',
			'posterous' => 'posterous',
			'reddit' => 'reddit',
			'sharethis' => 'sharethis',
			'skype' => 'skype',
			'soundcloud' => 'soundcloud',
			'spotify' => 'spotify',
			'stumbleupon' => 'stumbleupon',
			'tumblr' => 'tumblr',
			'twitter' => 'twitter',
			'viddler' => 'viddler',
			'vimeo' => 'vimeo',
			'virb' => 'virb',
			'windows' => 'windows',
			'wordPress' => 'wordPress',
			'youtube' => 'youtube',
			'zerply' => 'zerply',
			'rss' => 'rss',
			'mail' => 'mail'
		) );
	}
}

if ( ! function_exists( 'wpex_display_social' ) ) {
	function wpex_display_social() {
		if ( ! get_theme_mod( 'wpex_header_aside', true ) ) return;
		$wpex_social_links = wpex_social_links();
		foreach( $wpex_social_links as $wpex_social_link ) {
			if ( $url = get_theme_mod( 'wpex_social_'. $wpex_social_link ) ) {
				echo '<li><a href="'. esc_url( $url ) .'" title="'. esc_attr( $wpex_social_link ) .'" target="_blank"><img src="'. get_template_directory_uri() .'/images/social/'.esc_attr( $wpex_social_link ).'.png" alt="'. esc_attr( $wpex_social_link ) .'" /></a></li>';
		} }
	}
}