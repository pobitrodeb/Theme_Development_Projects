<?php 

function stacktheme_setup(){
     add_theme_support('title-tag'); 
     load_theme_textdomain('stack', get_template_directory_uri(). '/languages'); 
}
add_action('after_setup_theme', 'stacktheme_setup');