<?php 

Kirki::add_config('stacktheme_config', array(
    'capability'        => 'edit_theme_options', 
    'option_type'       => 'theme_mod',     
));

Kirki::add_panel('stacktheme_panel', array(
    'priority'          => 10, 
    'title'             => esc_html__('Stack Options', 'stacktheme'), 
    'description'       => esc_html__('description', 'stacktheme'), 
)); 

Kirki::add_section('banner_section', array(
    'title'             => esc_html__('Banner Section', 'stacktheme'),
    'panel'             => 'stacktheme_panel',
    'priority'          => 160,
));

Kirki::add_field('stacktheme_config', [
    'type'              => 'text', 
    'settings'          => 'banner_heading', 
    'section'           => 'banner_section', 
    'label'             => esc_html__('Banner Heading', 'stacktheme'), 
    'default'           => esc_html__('We Discover, Design & Build Digital Presence of Businesses', 'stacktheme'), 
    'priority'          => 10 
]);
