<?php
// Theme setup
function revolve_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('revolve', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register primary menu location
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'revolve'),
    ));
}
add_action('after_setup_theme', 'revolve_theme_setup');



function revolve_enqueue_styles() {
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '5.15.4');

    // Enqueue Bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.6.0');

    // Enqueue Owl Carousel
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.css', array(), '2.3.4');

    // Enqueue Main Style
    wp_enqueue_style('revolve-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');

    // Enqueue Responsive Styles
    wp_enqueue_style('revolve-responsive', get_template_directory_uri() . '/css/responsive.css', array('revolve-style'), '1.0.0');


     // Enqueue jQuery (WordPress includes jQuery by default)
     wp_enqueue_script('jquery');

     // Enqueue Bootstrap JS
     wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.6.0', true);
 
     // Enqueue Owl Carousel JS
     wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
 
     // Enqueue WOW JS
     wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.1.2', true);
 
     // Enqueue Custom Script JS
     wp_enqueue_script('revolve-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'revolve_enqueue_styles');

