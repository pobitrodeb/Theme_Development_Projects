<?php 
function biztrox_scripts(){
    // <!-- Bootstrap -->
    wp_enqueue_style('bootstrap',  get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), '1.0.0', 'all');

    // <!-- magnific popup -->
    wp_enqueue_style('magnific',  get_template_directory_uri() . '/plugins/magnific-popup/magnific-popup.css', array(), '1.0.0', 'all');

    // <!-- Slick Carousel -->
    wp_enqueue_style('slick-carousel',  get_template_directory_uri() . '/plugins/slick/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick-carousel2',  get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), '1.0.0', 'all');

    // <!-- themify icon -->
    wp_enqueue_style('themify',  get_template_directory_uri() . '/plugins/themify-icons/themify-icons.css', array(), '1.0.0', 'all');

    // <!-- animate -->
    wp_enqueue_style('animate',  get_template_directory_uri() . '/plugins/animate/animate.css', array(), '1.0.0', 'all');

    // <!-- Aos -->
    wp_enqueue_style('aos',  get_template_directory_uri() . '/plugins/aos/aos.css', array(), '1.0.0', 'all');

    // <!-- swiper -->
    wp_enqueue_style('swiper',  get_template_directory_uri() . '/plugins/swiper/swiper.min.css', array(), '1.0.0', 'all');
    // <!-- Stylesheets -->
    wp_enqueue_style('main',  get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');



}
add_action('wp_enqueue_scripts', 'biztrox_scripts');