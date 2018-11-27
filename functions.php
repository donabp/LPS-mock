<?php

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

/**
 * Add the billing string for PSN.
 */
function cws_psn_billing() {	
	echo '<!-- cwsplatform -->';
}

add_action( 'wp_footer', 'cws_psn_billing' );

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

//Register Nav Menu
register_nav_menu( 'primary', __( 'Primary navigation', 'wp-theme-centralnewholland.net' ) );

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');


// Load all of the necessary CSS and JavaScript.

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
} );
