<?php

function organi_theme_setup() {
    // Add support for various WordPress features
    add_theme_support('title-tag'); // Dynamic <title> tag support
    add_theme_support('post-thumbnails'); // Enable featured images
    add_theme_support('custom-logo'); // Custom logo support
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption')); // HTML5 support
    load_theme_textdomain( 'organi', get_template_directory() . '/languages' );

    // Register navigation menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'organi'),
    ));
}
add_action('after_setup_theme', 'organi_theme_setup');





function organi_enqueue_styles() {
    // Google Font 
    wp_enqueue_style('google-font','//fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap', array(), '1.0.0', 'all');
    // Bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
    // Font Awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '5.15.4', 'all');
    // Elegant Icons
    wp_enqueue_style('elegant-icons', get_template_directory_uri() . '/css/elegant-icons.css', array(), null, 'all');
    // Nice Select
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), null, 'all');
    // jQuery UI
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), null, 'all');
    // Owl Carousel
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null, 'all');
    // SlickNav
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), null, 'all');
    // Main Style
    wp_enqueue_style('organi-style', get_template_directory_uri() . '/css/style.css', array(), null, 'all');
   
   
    // JS
     // jQuery (WordPress already includes a bundled version of jQuery)
     wp_enqueue_script('jquery');
     // Bootstrap
     wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
     // Nice Select
     wp_enqueue_script('nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array('jquery'), null, true);
     // jQuery UI
     wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), null, true);
     // SlickNav
     wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), null, true);
     // Mixitup
     wp_enqueue_script('mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array('jquery'), null, true);
     // Owl Carousel
     wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
     // Main Script
     wp_enqueue_script('organi-main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'organi_enqueue_styles');
