<?php
/**
 * The Header for our theme.
 *
 * @package   Today WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	return;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script><![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap" class="clearfix">

	<div id="header-wrap" class="clearfix">
		<div id="pre-header" class="clearfix">
			<ul id="header-social" class="clearfix">
				<?php
				// Show social icons if enabled
				wpex_display_social(); ?>
			</ul><!-- #header-social -->
		</div><!-- #pre-header -->

		<header id="header" class="clearfix">
			<div id="logo" class="clearfix">
				<?php
				// Image Logo
				if ( $logo = get_theme_mod( 'wpex_logo' ) ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
				<?php
				// Text Logo
				else : ?>
					<div id="text-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></div>
				<?php endif; ?>
			</div><!-- /logo -->
			<nav id="navigation" class="clearfix">
				<?php wp_nav_menu( array(
					'theme_location' => 'main_menu',
					'sort_column'    => 'menu_order',
					'menu_class'     => 'sf-menu',
					'fallback_cb'     => false,
				)); ?>
			</nav><!-- #navigation -->
		</header><!-- #header -->
	</div><!-- #header-wrap -->
	
	<div id="main-content" class="clearfix">
	
		<?php
		// Homepage tagline
		if ( is_front_page() && get_bloginfo('description') ) : ?>
			<h2 id="homepage-title"><span><?php echo get_bloginfo('description'); ?></span></h2>
		<?php endif; ?>