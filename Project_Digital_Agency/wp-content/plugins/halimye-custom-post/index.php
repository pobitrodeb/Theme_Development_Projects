<?php
/*
 Plugin Name: Halimye Custom Plugin
 Plugin URI: http://pobitrodeb.com/halimye-custom-plugin
 Description: A custom plugin for the Halimye project.
 Version: 1.0.0
 Author: Pobitro Deb
 Author URI: http://wwww.pobitrodeb.com
 License: GPL2
 Text Domain: halimye
*/

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
        'show_in_rest'              => true, //Guttenbarg Editor Support Added 
        'menu_icon'                 => 'dashicons-slides', 
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
        'menu_icon'                         => 'dashicons-admin-generic', 
    )); 

    //Counter Custom Post 
    register_post_type('conuters', array(
        'labels'        => array(
            'name'                  => __('Counters', 'halimye'), 
            'singular_name'         => __('Counter', 'halimye')
        ),
        'public'                    => true, 
        'menu_icon'                 => 'dashicons-backup', 
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
        'menu_icon'                         => 'dashicons-businessman',    
    )); 

    //Testimonial Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name'                          => __('Testimonials', 'halimye'), 
            'singular_name'                 => __('Testimonial', 'halimye'), 
        ),
        'public'                            => true, 
        'show_ui'                           => true, 
        'supports'                           => array('title', 'editor','thumbnail', 'custom-fields'), 
        'show_in_rest'                      => true, 
        'menu_icon'                         => 'dashicons-testimonial',
    )); 

    //Portfolio Custom Post
    register_post_type('portfolio', array(
        'labels' => array(
            'name'                          => __('Portfolios', 'halimye'), 
            'singular_name'                 => __('Portfolio', 'halimye'), 
        ),
        'public'                            => true, 
        'show_ui'                           => true, 
        'supports'                           => array('title', 'editor', 'thumbnail', 'custom-fields'), 
        'show_in_rest'                      => true, 
        'menu_icon'                         => 'dashicons-portfolio',
    )); 

    register_taxonomy('portfolio-categories', 'portfolio', array(
        'labels' => array(
            'name'                          => __('Categories', 'halimye'), 
            'singular_name'                 => __('Category', 'halimye'),                           
        ), 
        'hierarchical'                      => true, 
        'show_admin_column'                 => true, 
        
    ));

     //Gallery Custom Post
     register_post_type('gallerys', array(
        'labels' => array(
            'name'                          => __('Gallerys', 'halimye'), 
            'singular_name'                 => __('Gallery', 'halimye'), 
        ),
        'public'                            => true, 
        'show_ui'                           => true, 
        'supports'                           => array('title', 'thumbnail', 'custom-fields'), 
        'show_in_rest'                      => true, 
        'menu_icon'                         => 'dashicons-format-gallery',
    )); 

}
add_action('init', 'halimye_custom_posts');