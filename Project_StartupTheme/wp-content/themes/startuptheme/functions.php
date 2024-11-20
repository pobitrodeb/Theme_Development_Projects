<?php 
function start_theme_support(){
    add_theme_support('title-tag');
    load_theme_textdomain( 'startuptheme', get_template_directory() . '/languages' );
    add_theme_support('post-thumbnails'); 

}

add_action('after_setup_theme','start_theme_support'); 