<?php 
/*
this function used for all the wordpress theme supports
Note: all the menus will be in this function
*/
function all_theme_supports(){
	load_theme_textdomain( 'shooter', get_template_directory() . '/languages' );

	register_nav_menus( array(
		'main_menu' => __('Main Manu', 'shooter'),
	) );

	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');

	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 110,
		'flex-width' => true,
	) );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );

	$defaults = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => true,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );

	add_theme_support( 'customize-selective-refresh-widgets' );


}
add_action('after_setup_theme', 'all_theme_supports');