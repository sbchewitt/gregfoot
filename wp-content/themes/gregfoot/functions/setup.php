<?php

// ADD CUSTOM IMAGE SIZES... Name, 000px wide, 000px high, hard crop mode
add_image_size( 'blog', 600, 400, true ); 


// SETUP ALL OTHER FUNCTIONS
add_action('after_setup_theme', 'theme_setup');


// REGISTER EVERYTHING
function theme_setup() {

	// Add theme styles and scripts
    add_action('wp_enqueue_scripts', 'theme_scripts_styles');
    add_action( 'admin_head', 'my_custom_admin_head' );


    // Custom taxonomies
    add_action( 'init', 'onstage_post_type', 0 );
    add_action( 'init', 'onyoutube_post_type', 0 );
    add_action( 'init', 'ontv_post_type', 0 );
    add_action( 'init', 'talks_post_type', 0 );
    add_action( 'init', 'training_post_type', 0 );
    add_action( 'admin_head', 'taxonomy_additional_icons' );
    add_action('after_switch_theme', 'prefix_flush_rewrite_rules');
    

    // Custom Admin logo and favicons
	add_action( 'login_enqueue_scripts', 'custom_login_logo' );
	add_filter( 'login_headerurl', 'custom_login_logo_url' );
	add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');


	// Add custom acf color picker
	add_action( 'acf/input/admin_head', 'change_acf_color_picker' );


    // Add custom menus
    add_theme_support('menus');
    add_action( 'init', 'custom_menus' );


    // Add support for woocommerce if required
    // add_theme_support('woocommerce');


    // Add support for custom post img sizes
    // add_theme_support('post-thumbnails');


    // Remove '<p>' tags around images
    // add_filter('the_content', 'filter_ptags_on_images');


    // Hide admin bar
    // add_filter('show_admin_bar', '__return_false');


    // Add classes to body
    // add_filter( 'body_class', 'add_body_class' );


    // Remove admin menus
    // add_action( 'admin_menu', 'remove_menus' );


    // Register custom widgets
    // add_action( 'widgets_init', 'widgets_init' );

}