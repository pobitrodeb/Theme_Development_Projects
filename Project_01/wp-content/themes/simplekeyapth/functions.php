<?php 
    load_theme_textdomain('simplekeyapth');

function simplekeyapth_setup(){ 
    register_nav_menus( array( 
        'main-menu' => __('Main Menu', 'simplekeyapth'), 
        'footer-menu' => __('Footer Menu', 'simplekeyapth'), 
        'sidebar-menu' => __('Sidebar Menu', 'simplekeyapth'), 
     ));

}
add_action('after_setup_theme', 'simplekeyapth_setup');

function simplekeyapth(){
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '10.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '10.0', 'all');
    // wp_enqueue_style('main', get_stylesheet_uri( )); **This is theme CSS 
   
}
add_action('wp_enqueue_scripts', 'simplekeyapth');