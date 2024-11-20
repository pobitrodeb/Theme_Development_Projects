<?php 
function start_theme_support(){
    add_theme_support('title-tag');
    load_theme_textdomain( 'startuptheme', get_template_directory() . '/languages' );
    add_theme_support('post-thumbnails'); 

}

add_action('after_setup_theme','start_theme_support'); 


function startuptheme_enqueue_scripts(){
    /**
        * Enqueue CSS files for Startup Theme.
    */
      // Google Font Stylesheet
      wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), '1.0.0', 'all' );
    
      // Icon Font Stylesheet
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '6.0.0', 'all' );

    // Libraries Stylesheet
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1', 'all' );

    // Customized Bootstrap Stylesheet
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0', 'all' );

    // Template Stylesheet
    wp_enqueue_style( 'startuptheme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );

    /**
     * Enqueue JavaScript files for Startup Theme.
     */
    // jQuery Library
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', true );

    // Bootstrap Bundle JS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.0', true );
   
    // WOW.js
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.1.3', true );
   
    // Waypoints Library
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), '4.0.1', true );
   
    // Counterup Library
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array( 'jquery', 'waypoints' ), '1.0', true );
   
    // Owl Carousel
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
   
    // Main Template JavaScript
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'startuptheme_enqueue_scripts' );

