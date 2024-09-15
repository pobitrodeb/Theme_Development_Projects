<?php 

function simplekeyapth(){
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '10.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '10.0', 'all');
    // wp_enqueue_style('main', get_stylesheet_uri( )); **This is theme CSS 
   
}
add_action('wp_enqueue_scripts', 'simplekeyapth');