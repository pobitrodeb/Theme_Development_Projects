<?php 

require_once(get_template_directory(). '/inc/redux.php');
function blogkeyapth_setup(){

   load_theme_textdomain('blogkeyapth');
    
   // Title dynamic 
   add_theme_support('title-tag'); 
   add_theme_support('post-thumbnails'); 

   //Menu Register 
   register_nav_menus(array(
    'main-menu' => __('Main Menu', 'blogkeyapth'), 
    'footer-menu' => __('Footer Menu', 'blogkeyapth'), 
   ));

}
add_action('after_setup_theme', 'blogkeyapth_setup');



function blogkeyapth_scripts(){

     wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel-main', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('main', get_stylesheet_uri());
    // wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '10.0', 'all');
    
    //js 
    // wp_enqueue_scripts('main-jquery', get_template_directory_uri() . 'assets/js/jquery.min.js', array('jquery'), '10.0', 'all');
    // wp_enqueue_scripts('owl-carosel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '10.0', 'true');
    // wp_enqueue_scripts('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '10.0', 'true');
    
}
add_action('wp_enqueue_scripts', 'blogkeyapth_scripts');


//Register Sidebar 
function blogkeyapth_widgets(){
   register_sidebar(array(
      'name' => __('Main Sidebar', 'blogkeyapth'), 
      'id'   =>  __('sidebar-1'), 
      'description' => __('Our main sidebar', 'blogkeyapth'), 
      'before-widget' => '<div class="blog-sidebar">', 
      'after-widget'  => '</div>', 
      'before-title'  => '<h3>', 
      'after-title'   => '</h3>'

   ));

}
add_action('widgets_init', 'blogkeyapth_widgets');

