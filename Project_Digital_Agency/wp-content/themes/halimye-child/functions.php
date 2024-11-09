<?php
function halimye_child_enqueue_styles() {
    wp_enqueue_style( 'halimye-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'halimye-child-style', get_stylesheet_directory_uri() . '/style.css', array('halimye-parent-style') );
}
add_action( 'wp_enqueue_scripts', 'halimye_child_enqueue_styles' );
