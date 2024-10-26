<?php 

function gopiacf_style() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'gopiacf_style');

