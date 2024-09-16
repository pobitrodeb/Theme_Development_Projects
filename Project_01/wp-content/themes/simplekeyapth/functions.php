<?php 

    /*****Language Support *****/
    load_theme_textdomain('simplekeyapth');

    /***** Title *****/
    add_theme_support('title-tag'); 

    /*****Navabar Support *****/
function simplekeyapth_setup(){ 
    register_nav_menus( array( 
        'main-menu' => __('Main Menu', 'simplekeyapth'), 
        'footer-menu' => __('Footer Menu', 'simplekeyapth'), 
        'sidebar-menu' => __('Sidebar Menu', 'simplekeyapth'), 
     ));

}
add_action('after_setup_theme', 'simplekeyapth_setup');

function simplekeyapth_style(){
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '10.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '10.0', 'all');
    // wp_enqueue_style('main', get_stylesheet_uri( )); **This is theme CSS 
   
}
add_action('wp_enqueue_scripts', 'simplekeyapth_style');



// Register Sidebar 
function simplekeyapth_widgets(){

    register_sidebar(array(
        'name'              => __('Main Sidebar', 'simplekeyapth'), 
        'id'                => ('sidebar-1'), 
        'description'       => __('Our Main Sidebar', 'simplekeyapth'), 
        'before_widget'     => '<div class="single-sidebar">', 
        'after_widget'      => '</div>', 
        'before_widget'     => '<h4>', 
        'after_widget'     => '</h4>', 
    )); 

}

add_action('widgets_init', 'simplekeyapth_widgets');
