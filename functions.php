<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Set up theme support
function elementor_hello_theme_setup() {

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo', array(
		'height' => 70,
		'width' => 350,
		'flex-height' => true,
		'flex-width' => true,
	) );

	load_theme_textdomain( 'ws-theme-boilerplate', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'elementor_hello_theme_setup' );

// Theme Scripts & Styles
function elementor_hello_theme_scripts_styles() {
	wp_enqueue_style( 'elementor-hello-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'elementor_hello_theme_scripts_styles' );

// Register Elementor Locations
function elementor_hello_theme_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
};
add_action( 'elementor/theme/register_locations', 'elementor_hello_theme_register_elementor_locations' );

// Remove WP Embed
function elementor_hello_theme_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'elementor_hello_theme_deregister_scripts' );

// Remove WP Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// CWS Functions
/**
 * Load all of the necessary CSS and JavaScript.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-1.12.4.min.js', [ ], false, true );

	wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', [], null, true );
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
} );

/**
* Register our sidebars/widgetized areas.
*/
function cws_widgets_init() {

	register_sidebar( array(
			'name'          => 'Featured Inventory Widget Area',
			'id'            => 'featured_inventory_widget_area',
			'before_widget' => '<div class="widget ' . '%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );

	register_sidebar( array(
			'name'          => 'Quick Search Widget Area',
			'id'            => 'quick_search_widget_area',
			'before_widget' => '<div class="widget ' . '%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'cws_widgets_init' );