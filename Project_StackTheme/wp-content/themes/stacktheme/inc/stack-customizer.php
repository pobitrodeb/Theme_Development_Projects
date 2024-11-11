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

// About Section Customizer 
Kirki::add_section('about_section', array(
    'title'             => esc_html__('About Section', $domain), 
    'panel'             => 'stacktheme_panel', 
    'priority'          => 150,
));

// About Section Title 
Kirki::add_field('stacktheme_config', [
    'type'              => 'text', 
    'settings'          => 'about_heading_text', 
    'section'           => 'about_section', 
    'label'             => esc_html__('About Heading Title', $domain), 
    'default'           => esc_html__('We are helping to grow your business.', $domain),
    'transport'         => 'postMessage', 
    'js_vars'           => array(
        array (
          'element'     => '.title-hl',
		  'function'    => 'html',
        )
    )
]);

Kirki::add_field('stacktheme_config',[
    'type'              => 'typography', 
    'settings'          => 'about_heading_text_typography', 
    'section'           => 'about_section',
    'label'             => esc_html__('About Heading Typography', $domain), 
    'default'           => [
          'font-family'     =>  'Titillium Web', 
          'font-weight'     =>  '700',
          'font-size'       =>  '38px', 
          'color'           => '#222222', 
          'line-height'     => '1.5',
          'letter-spacing'  => '0',
          'text-transform'  => 'none',
          'text-decoration' => 'none',
          'text-align'      => 'left', 
    ], 
    'output'           => [
        'element'           => '.title-hl', 
        'function'          => 'html',
    ] 
]); 

// About Section Content 
Kirki::add_field('stacktheme_config', [

    'type'                  => 'textarea', 
    'settings'              => 'about_section_content', 
    'section'               => 'about_section', 
    'label'                 => esc_html__('About Section Content', $domain), 
    'default'               => esc_html__('A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', $domain), 
    'transport'             => 'postMessage', 
    'js_vars'               => array(
        array(
            'element'       => '.stack_theme_about_content', 
            'function'      => 'html'
        )
    )
]); // end kirki about section content 

Kirki::add_field('stacktheme_config', [
    'type'                  => 'typography', 
    'settings'              => 'about_section_content_typography', 
    'section'               => 'about_section', 
    'label'                 => esc_html__('About Content Typography', $domain), 
    'default'               => [
        'font-family'       => 'Open Sans',
        'font-weight'       => '400', 
        'font-size'         => '14px',
        'color'             => '#222222',
        'line-height'       => '1.5',
        'letter-spacing'    => '0',
        'text-transform'    => 'none',
        'text-decoration'   => 'none',
        'text-align'        => 'left',   
    ], 
    'output'                => array(
        'element'     =>  '.stack_theme_about_content', 
        'function'    => 'html'        
    )
]);



Kirki::add_field('stacktheme_config', [
    'type'          => 'text', 
    'settings'      => 'about_button_text', 
    'section'       => 'about_section', 
    'label'         => esc_html__('About Button Text', $domain), 
    'default'       => esc_html__('More About Us', $domain), 
    'transport'     => 'postMessage', 
    'js_vars'       => array(
        array(
            'element'   => '.stacktheme_about_btn', 
            'function'  => 'html', 
        ),
    )
]); 

Kirki::add_field('stacktheme_config', [
    'type'          => 'typography', 
    'settings'      => 'about_button_text_link', 
    'section'       => 'about_section', 
    'label'         => esc_html__('About Button Typographiy', $domain), 
    'default'               => [
        'font-family'       => 'Open Sans',
        'font-weight'       => '400', 
        'font-size'         => '14px',
        'color'             => '#222222',
        'line-height'       => '1.5',
        'letter-spacing'    => '0',
        'text-transform'    => 'none',
        'text-decoration'   => 'none',
        'text-align'        => 'left',   
    ], 
    'output'                => array(
        'element'     =>  '.stacktheme_about_btn', 
        'function'    => 'html'        
    )
]);

// Banner Btn Text 
Kirki::add_field('stacktheme_config', [
    'type'              => 'link', 
    'settings'          => 'about_banner_btn_link', 
    'section'           => 'about_section', 
    'label'             => esc_html__('About Button URL', $domain), 
    'default'           => esc_html__('https://www.facebook.com', $domain),
    'priority'          => 10,
    'transport'         => 'postMessage', 
    'js_vars'           => array(
        array (
          'element'  => '.stacktheme_about_btn',
		  'function' => 'html',
        )
    )
]);

//About Items 
Kirki::add_field('stacktheme_config', [
    'type'          => 'repeater', 
       
    'section'       => 'about_section',
    'label'         => esc_html__('About Items', $domain),  
    'priority'      => 10, 
    'row_label'     => [
        'type'  => 'field', 
        'value' => esc_html__('Add New Item ', $domain), 
        'field' => 'about_item_title', 
    ],
    'button_label'      => esc_html__('Add New About Item', $domain), 
    'settings'      => 'about_repeater', 
    'default'      => [
			[
				'about_item_icon'   => 'lni-microphone',
				'about_item_title'   => esc_html__( 'What we do', $domain ),
				'about_item_desc'    => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', $domain ),
				
			],
		],
    'fields'       => [
			'about_item_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'About Item Title', 'kirki' ),
				'default'     => '',
                'choices'     => array(
                    'lni-microphone'    => __('Icon -1', $domain),
                    'lni-users'         => __('Icon -2', $domain),
                    'lni-medall-alt'    => __('Icon -3', $domain),
                )
			],
			'about_item_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'About Item Title', 'kirki' ),
				'default'     => '',
			],
			'about_item_desc'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'About Item Description', 'kirki' ),
				'default'     => '',
			],
		],
        'choices' => [
	        'limit' => 3
        ]
]);