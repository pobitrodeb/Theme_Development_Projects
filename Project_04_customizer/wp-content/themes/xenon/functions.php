
<?php 

require_once(get_theme_file_path('/inc/xenon-customize.php'));

/**
 * Theme Essential Support
 */
function xenon_essential_support(){

    /* Load text domain */
    load_theme_textdomain('xenon'); 

    /* Dynamic title tag */
    add_theme_support('title-tag'); 

    /* Post thumbanils supporrt */
    add_theme_support('post-thumbanils'); 
}
add_action('after_setup_theme', 'xenon_essential_support');

/**
 * Theme CSS & Js Support
 */

 function xenon_load_scripts(){
    /* Bootstrap Css */    
      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
     /* Font Awesome Css */   
      wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
     /* Magnific Popup Css  */   
      wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    /*  Owl Carousel Css */    
      wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
     /* Main Css */   
      wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    /* Responsive Css */  
      wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );


    // Main JS 
      wp_enqueue_script( 'main-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.0.0', 'all' );
    // Popper JS 
      wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', 'all' );
    // Bootstrap JS 
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', 'all' );
    // Owl Carousel JS
      wp_enqueue_script( 'owl-carosel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', 'all' );
    // Manific Popup JS 
      wp_enqueue_script( 'manific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', 'all' );
    //One Page Nav JS
      wp_enqueue_script( 'on-page-nav-js', get_template_directory_uri() . '/assets/js/onepagenav.js', array('jquery'), '1.0.0', 'all' );
    // Counter JS 
      wp_enqueue_script( 'counter', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', 'all' );
    // Waypoint JS 
      wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', 'all' );
	// Ripples JS 
      wp_enqueue_script( 'ripples', get_template_directory_uri() . '/assets/js/jquery.ripples.min.js', array('jquery'), '1.0.0', 'all' );
    //Main JS 
      wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', 'all' );
 }
 add_action('wp_enqueue_scripts', 'xenon_load_scripts');