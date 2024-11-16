<?php

//Theme Setup 
function belfast_theme(){
    add_theme_support('title-tag');
    load_theme_textdomain('belfast', get_template_directory() . '/languages');
    add_theme_support('post-thumbnails', ); 

}
add_action('wp_setup_theme', 'belfast_theme'); 


// Enqueue styles and scripts for the Belfast theme
function belfast_enqueue_styles_scripts() {

    // Enqueue Styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null, 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.css', array(), null, 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), null, 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), null, 'all');

    // Enqueue Scripts
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'belfast_enqueue_styles_scripts');
