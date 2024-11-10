<?php 

//Kirki Customizer Added 
require_once(get_theme_file_path( '/inc/stack-customizer.php' )); 


function stacktheme_setup(){
     add_theme_support('title-tag'); 
     load_theme_textdomain('stack', get_template_directory_uri(). '/languages'); 
}
add_action('after_setup_theme', 'stacktheme_setup');

function stacktheme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0', 'all');
    
    // Icon Fonts
    wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css', array(), null, 'all');
    
    // Slicknav CSS
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), null, 'all');
    
    // Owl Carousel CSS
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null, 'all');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), null, 'all');
    
    // Magnific Popup CSS
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null, 'all');
    
    // Nivo Lightbox CSS
    wp_enqueue_style('nivo-lightbox', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', array(), null, 'all');
    
    // Animate CSS
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), null, 'all');
    
    // Main Style CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');
    
    // Responsive Style CSS
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), null, 'all');



    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery-min.js', array('jquery'), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), null, true);
    wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('nivo-lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'stacktheme_enqueue_styles');

