<?php
/**
 * Loads CSS and JS scripts on the front-end
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

if ( ! function_exists( 'wpex_load_scripts' ) ) {
	
	function wpex_load_scripts() {
		
		/*******
		*** CSS
		*******************/
		$dir = get_template_directory_uri().'/css';
		
		// Main
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		
		// Responsive
		wp_enqueue_style( 'wpex-responsive', $dir . '/responsive.css' );

		// PrettyPhoto
		wp_enqueue_style( 'prettyPhoto', $dir . '/prettyPhoto.css' );
		
		// Google Fonts
		wp_enqueue_style( 'opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext', 'style' );

		/*******
		*** jQuery
		*******************/
		$dir = get_template_directory_uri().'/js';
		
		// Scripts
		wp_enqueue_script( 'superfish', $dir .'/superfish.min.js', array( 'jquery' ), '1.7.8', true );
		wp_enqueue_script( 'hoverIntent', $dir .'/hoverIntent.js', array( 'jquery', 'superfish' ), 'r7', true );
		wp_enqueue_script( 'prettyPhoto', $dir .'/jquery.prettyPhoto.js', array( 'jquery' ), '3.1.6', true );
		wp_enqueue_script( 'flexslider', $dir .'/jquery.flexslider.js', array( 'jquery' ), '2.6.0', true );
		wp_enqueue_script( 'fitvids', $dir .'/jquery.fitvids.js', array( 'jquery' ), '1.1', true );
		wp_enqueue_script( 'imagesloaded', $dir .'/imagesloaded.pkgd.min.js', array( 'jquery' ), '4.1.0', true );
		wp_enqueue_script( 'isotope', $dir .'/jquery.isotope.js', array( 'jquery', 'imagesloaded' ), '2.2.2', true );
		wp_enqueue_script( 'slicknav', $dir .'/jquery.slicknav.js', array( 'jquery' ), '2.1.2', true );

		// Theme js
		wp_enqueue_script( 'wpex-global', $dir .'/global.js', array( 'jquery' ), '1.0', true );
		wp_localize_script( 'wpex-global', 'wpexvars', array(
			'mobileMenuLabel' => __( 'Menu', 'tetris' ),
		) );

		// Comment replies
		if ( is_single() || is_page()) {
			wp_enqueue_script( 'comment-reply' );
		}

		
	}

}
add_action( 'wp_enqueue_scripts','wpex_load_scripts' );