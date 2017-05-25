<?php
/**
 * Define widget areas
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

function wpex_widget_areas() {
	register_sidebar(array(
		'name' => __( 'Sidebar','tetris'),
		'id' => 'sidebar',
		'description' => __( 'Widgets in this area are used on the main sidebar region.','tetris' ),
		'before_widget' => '<div class="sidebar-box %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h4><span>',
		'after_title' => '</span></h4>',
	) );
	register_sidebar(array(
		'name' => __( 'Footer 1','tetris'),
		'id' => 'footer-one',
		'description' => __( 'Widgets in this area are used in the first footer column','tetris' ),
		'before_widget' => '<div class="footer-widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h4><span>',
		'after_title' => '</span></h4>',
	) );
	register_sidebar(array(
		'name' => __( 'Footer 2','tetris'),
		'id' => 'footer-two',
		'description' => __( 'Widgets in this area are used in the second footer column','tetris' ),
		'before_widget' => '<div class="footer-widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h4><span>',
		'after_title' => '</span></h4>'
	) );
	register_sidebar(array(
		'name' => __( 'Footer 3','tetris'),
		'id' => 'footer-three',
		'description' => __( 'Widgets in this area are used in the third footer column','tetris' ),
		'before_widget' => '<div class="footer-widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h4><span>',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'wpex_widget_areas' );