<?php
/**
 * Template searchform
 *
 * @package   Testris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */ ?>

<form method="get" id="searchbar" action="<?php echo esc_url( home_url( '/' ) ); ?>"><input type="search" name="s" value="<?php _e( 'Type and hit enter to search', 'tetris' ); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"></form>