<?php 

require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php'; 
require_once get_template_directory(). '/inc/halimye-activation.php'; 
require_once get_template_directory(). '/inc/halimye-demo-acf-data.php'; 
require_once get_template_directory(). '/inc/halimye-demo-data.php'; 


function halimye_setup(){
    load_theme_textdomain('halimye', get_template_directory() . '/languages'); 
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallerys'));  

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halimye'),
    )); 
}

add_action('after_setup_theme', 'halimye_setup');



function halimye_assets(){
    wp_enqueue_style('font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(),'1.0.0', 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all'); 
    wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all'); 
    wp_enqueue_style('magnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all'); 
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all'); 
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all'); 
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all'); 
    //Theme Style.css 
    wp_enqueue_style('style-theme', get_template_directory_uri());


    wp_enqueue_script('main', get_template_directory_uri() . 'assets/js/jquery.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('manific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('isotope-jS', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('imageload-jS', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('counter-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('counter-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', 'true' );
    wp_enqueue_script('main-jS', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', 'true' );
}

add_action('wp_enqueue_scripts', 'halimye_assets'); 





//ACF Options 
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Halimye Options', 'halimye',
        'menu_title'    => 'Halimye Options', 'halimye',
        'menu_slug'     => 'halimye-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Hlaimye Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'halimye-options',
    ));

    
    acf_add_options_sub_page(array(
        'page_title'    => 'Halimye About Settings',
        'menu_title'    => 'About',
        'parent_slug'   => 'halimye-options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Halimye FAQ Settings',
        'menu_title'    => 'FAQ',
        'parent_slug'   => 'halimye-options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Halimye Skill Settings',
        'menu_title'    => 'Skill',
        'parent_slug'   => 'halimye-options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Halimye CTA Settings',
        'menu_title'    => 'CTA',
        'parent_slug'   => 'halimye-options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Halimye Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'halimye-options',
    ));


}


//ACF Options CSS 

function halimye_css(){
    ?>
        <style>
            .header-top {
                background-color: <?php the_field('header_background', 'option'); ?>;
            }
        </style>
    <?php
}
add_action('wp_head', 'halimye_css'); 


#Register Sidebar 
function halimye_widgets_init(){
    register_sidebar( array (
            'name'                      => __('Main Sidebar', 'halimye'), 
            'id'                        => 'sidebar-1', 
            'description'               => __('Here is main sidebar widgets', 'halimye'),
            'before_widget'             => '<div class="single-sidebar">', 
            'after_widget'              => '</div>', 
            'before_title'              => '<h4>', 
            'after_title'               => '</h4>',      
    )); 

    register_sidebar( array(
           'name'                       => __('Footer 1', 'halimye'),
           'id'                         => 'footer-1', 
           'description'                => __('This is footer 1', 'halimye'), 
           'before_widget'              => '<div class="single-footer footer-logo">',  
           'after_widget'               => '</div>',
           'before_title'               => '<h3>',   
           'after_title'                => '</h3>',   
    ));

    register_sidebar( array (
        'name'                          => __('Footer-2', 'halimye'), 
        'id'                            => 'footer-2', 
        'description'                   => __('This is footer 2', 'halimye'), 
        'before_widget'                 => '<div class="single-footer">', 
        'after_widget'                  =>  '</div>', 
        'before_title'                  => '<h4>', 
        'after_title'                   => '</h4>'  
    )); 

    register_sidebar( array(
        'name'                          => __('Footer 3', 'halimye'), 
        'id'                            => 'footer-3', 
        'description'                   => __('This is footer 3', 'halimye'), 
        'before_widget'                 => '  <div class="single-footer">', 
        'after_widget'                  => '</div>', 
        'before_title'                  => '<h4>', 
        'after_title'                   => '</h4>'
    )); 
}
add_action('widgets_init', 'halimye_widgets_init'); 


