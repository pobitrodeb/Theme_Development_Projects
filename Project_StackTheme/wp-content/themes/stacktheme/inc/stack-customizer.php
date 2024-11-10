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
    'description'       => esc_html__('We Discover, Design & Build Digital Presence of Businesses', $domain), 
    'transport'         => 'postMessage', 
    'js_vars'           => array(
        array (
          'element'  => '.head-title',
			'function' => 'html',
        )
    )
]);

Kirki::add_field('stacktheme_config', [
    'type'              => 'typography', 
    'settings'          => 'banner_heading_typography', 
    'section'           => 'banner_section', 
    'label'             => esc_html__('Banner Heading Typography', $domain), 
    'default'           => [
        'font-family'     => 'Roboto',
        'variant'         => 'regular',
        'font-style'      => 'normal',
        'color'           => '#333333',
        'font-size'       => '84px',
        'line-height'     => '1.5',
        'letter-spacing'  => '0',
        'text-transform'  => 'none',
        'text-decoration' => 'none',
        'text-align'      => 'center',
    ],
    'output'              => [
        'element'         => '#hero-area .contents .head-title',
    ],
   
]);

// Banner Btn Text 
Kirki::add_field('stacktheme_config', [
    'type'              => 'text', 
    'settings'          => 'banner_btn_text', 
    'section'           => 'banner_section', 
    'label'             => esc_html__('Banner Heading', $domain), 
    'priority'          => 10,
    'transport'         => 'postMessage', 
    'js_vars'           => array(
        array (
          'element'  => '.btn-common',
			'function' => 'html',
        )
    )
]);

// Banner Btn Text 
Kirki::add_field('stacktheme_config', [
    'type'              => 'link', 
    'settings'          => 'banner_btn_link', 
    'section'           => 'banner_section', 
    'label'             => esc_html__('Banner Heading', $domain), 
    'default'           => esc_html__('https://www.google.com', $domain),
    'priority'          => 10,
    'transport'         => 'postMessage', 
    'js_vars'           => array(
        array (
          'element'  => '.btn-common',
			'function' => 'html',
        )
    )
]);


// Banner Image 
Kirki::add_field('stacktheme_config', [
    'type'              => 'image', 
    'settings'          => 'banner_image',  
    'section'           => 'banner_section', 
    'label'             => esc_html__('Banner Image', $domain), 
    'default'           => '',
    'priority'          => 10,
    'choices'           => [
		'save_as' => 'array',
	],
]);