<?php 
$domain = 'stacktheme'; 

Kirki::add_config('stacktheme_config', array(
    'capability'         => 'edit_theme_options', 
    'option_type'        => 'theme_mod', 
)); 


Kirki::add_panel('stacktheme_panel', array(
    'priority'          => 10, 
    'title'             => esc_html__('Stack Options', $domain), 
    'description'       => esc_html__('Description', $domain)
));

Kirki::add_section('banner_section', array(
    'title'             => esc_html__('Banner Section', $domain),
    'panel'             => 'stacktheme_panel',
    'priority'          => 160, 
));

Kirki::add_field('stacktheme_config', [
    'type'              => 'text', 
    'settings'          => 'banner_heading', 
    'section'           => 'banner_section', 
    'label'             => esc_html__('Banner Heading', $domain), 
    'description'       => esc_html__('We Discover, Design & Build Digital Presence of Businesses', $domain)
]);