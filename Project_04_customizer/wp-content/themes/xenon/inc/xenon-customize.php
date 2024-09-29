<?php 

function xenon_customizer($wp_customize){
    $wp_customize -> add_section('bannar_section', array(
        'title' => __('Bannar Section', 'xenon'),
    ));
    $wp_customize -> add_setting('bannar_heading', array(
        'default' => __('I Am xenon doe', 'xenon'),
    ));
    $wp_customize -> add_control('banner_heading_ctrl', array(
        'label'     =>  __('Write Heading', 'xenon'), 
        'type'      =>  'text', 
        'settings'  =>  'bannar_heading', 
        'section'   =>   'bannar_section'
    ));
}

add_action('customize_register', 'xenon_customizer');