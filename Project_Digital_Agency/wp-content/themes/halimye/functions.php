<?php 

function halimye_setup(){
    load_theme_textdomain('halimye', get_template_directory() . '/languages'); 
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams'));  

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


//Custom Posts 
function halimye_custom_posts(){
    
    //Slider Custom Post 
    register_post_type('sliders', array(
        'labels'    => array(
            'name'                  => __('Sliders', 'halimye'), 
            'singular_name'         => __('Slider', 'halimye'),
        ),
        'public'                    => true, 
        'show_ui'                   => true, 
        'supports'                  => array('title', 'editor', 'thumbnail', 'custom-fields'), 
        'show_in_rest'              => true //Guttenbarg Editor Support Added 
    ));

    //Services Custom Post 
    register_post_type('services', array(
        'labels' => array(
            'name'                          => __('Services', 'halimye'), 
            'singular_name'                 => __('Service', 'halimye'), 
        ),
        'public'                            => true, 
        'show_ui'                           => true, 
        'supports'                           => array('title', 'editor', 'custom-fields'), 
        'show_in_rest'                      => true, 
    )); 

    //Counter Custom Post 
    register_post_type('conuters', array(
        'labels'        => array(
            'name'                  => __('Counters', 'halimye'), 
            'singular_name'         => __('Counter', 'halimye')
        ),
        'public'                    => true, 
    ));

    //Team Custom Post
    register_post_type('teams', array(
        'labels' => array(
            'name'                          => __('Teams', 'halimye'), 
            'singular_name'                 => __('Team', 'halimye'), 
        ),
        'public'                            => true, 
        'show_ui'                           => true, 
        'supports'                           => array('title', 'editor','thumbnail', 'custom-fields'), 
        'show_in_rest'                      => true, 
    )); 

}
add_action('init', 'halimye_custom_posts');