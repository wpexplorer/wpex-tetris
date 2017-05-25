<?php
// Include meta class
require_once( get_template_directory() .'/inc/CMB2/init.php' );

// Add meta
function wpex_metaboxes() {
	$prefix = 'wpex_';

	$wpex_meta = new_cmb2_box( array(
		'id'            => 'wpex-post-meta',
		'title'         => __( 'Post Settings', 'tetris' ),
		'object_types'  => array( 'post' ),
		'context'       => 'normal',
		'priority'      => 'high',
	) );

	$wpex_meta->add_field( array(
		'name'	=> __( 'Link Format URL', 'tetris' ),
		'id'	=> $prefix . 'post_url',
		'desc'	=> __( 'Enter the url for your link format URL.', 'tetris' ),
		'std'	=> '',
		'type'	=> 'text_url',
	) );

	$wpex_meta->add_field( array(
		'name'	=> __( 'Video URL', 'tetris' ),
		'id'	=> $prefix . 'post_video',
		'desc'	=>  __( 'Enter in a video URL that is compatible with WordPress\'s built-in oEmbed feature.', 'tetris' ) .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __( 'Learn More', 'tetris' ),
		'std'	=> '',
		'type'	=> 'text_url',
	) );

	$wpex_meta->add_field( array(
		'name'	=> __( 'Self Hosted Audio', 'tetris' ),
		'id'	=> $prefix . 'post_audio_mp3',
		//'desc'	=> __( 'Enter the url for your mp3 audio file for your audio post format.', 'tetris' ),
		'std'	=> '',
		'type'	=> 'file',
	) );

}
add_filter( 'cmb2_admin_init', 'wpex_metaboxes' );