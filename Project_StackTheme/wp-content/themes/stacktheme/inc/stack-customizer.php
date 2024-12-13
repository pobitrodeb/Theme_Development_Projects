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
    'settings'      => 'about_repeater',  
    'section'       => 'about_section',
    'label'         => esc_html__('About Items', $domain),  
    'priority'      => 10, 
    'row_label'     => [
        'type'  => 'field', 
        'value' => esc_html__('Add New Item ', $domain), 
        'field' => 'about_item_title', 
    ],
    'button_label'      => esc_html__('Add New About Item', $domain), 
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




// Services Show or Not 
Kirki::add_field('stacktheme_config', [
    'type'          => 'checkbox', 
    'settings'      => 'services_checkbox', 
    'section'       => 'service_section',
    'priotity'      => 100, 
    'label'         => esc_html__('Services Show?', $domain), 
    'default'       => true, 
]);


// Services Section Customizer 
Kirki::add_section('service_section', array(
    'title'     => esc_html__('Services Section', $domain), 
    'panel'     => 'stacktheme_panel', 
    'priotity'  => '140',
));

// Services Section Title Customizer 
Kirki::add_field('stacktheme_config', [
     'type'             => 'text', 
     'settings'         => 'services_title', 
     'section'          => 'service_section', 
     'label'            => esc_html__('Add Services Title', $domain), 
     'default'          => esc_html__('Our Services', $domain), 
     'transport'        => 'postMessage', 
     'js_vars'          => array(
        array(
                'element'       => '.services_title', 
                'function'      => 'html'
        ),
     )
]); 


Kirki::add_field('stacktheme_config', [
    'type'              => 'typography', 
    'settings'          => 'services_title_typography', 
    'section'           => 'service_section', 
    'label'             => esc_html__('Services Heading Typography', $domain), 
    'default'           => [
        'font-family'       => 'Titillium Web"',
        'font-weight'       => '700', 
        'font-size'         => '30px',
        'color'             => '#222222',
        'line-height'       => '36px',
        'letter-spacing'    => '0',
        'text-transform'    => 'none',
        'text-decoration'   => 'none',
        'text-align'        => 'center',  
    ], 
    'output'            => array (
        'element'       => '.services_title', 
        'function'      => 'html'
    )
]);

// Services Section Sub-Title Customizer 
Kirki::add_field('stacktheme_config', [
    'type'          => 'textarea', 
    'settings'      => 'services_subtitle', 
    'section'       => 'service_section', 
    'label'         => esc_html__('Add Services Subtitle ', $domain), 
    'default'       => esc_html__('A desire to help and empower others between community contributors in technology
    began to grow in 2024.', $domain), 
    'transport'     => 'postMessage', 
    'js_vars'       => array(
        array(
                'element'       => '.services_subtitle', 
                'function'      => 'html', 
        ),
    )
]); 

Kirki::add_field('stacktheme_config', [
    'type'              => 'typography', 
    'settings'          => 'services_title_typography', 
    'section'           => 'service_section', 
    'label'             => esc_html__('Services Heading Typography', $domain), 
    'default'           => [
        'font-family'       => 'Titillium Web"',
        'font-weight'       => '700', 
        'font-size'         => '30px',
        'color'             => '#222222',
        'line-height'       => '36px',
        'letter-spacing'    => '0',
        'text-transform'    => 'none',
        'text-decoration'   => 'none',
        'text-align'        => 'center',  
    ], 
    'output'            => array (
        'element'       => '.services_subtitle', 
        'function'      => 'html'
    )
]);


// Services Section Services Items 
Kirki::add_field('stacktheme_config', [
    'type'          => 'repeater', 
    'section'       => 'service_section', 
    'settings'      => 'services_repeater', 
    'label'         => esc_html__('Add New Services', $domain), 
    'row_label'     => [
        'type'      => 'field', 
        'value'     => esc_html__('Add New Item', $domain),
        'field'     => 'about_item_title', 
    ], 
    'button_label'  => esc_html__('Add New Services Item', $domain), 
    'default'       => [
        [
            'service_icon'      => 'lni-pencil', 
            'services_title'    => esc_html__('Content Writing', $domain),
            'services_desc'     => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', $domain),
        ],
    ], 
    'fields'        => [
        'service_icon' => [
                'type'      => 'select', 
                'label'     => esc_html__('Add Service Icon', $domain), 
                'default'   => '',
                'choices'   => array(
                    'lni-pencil'        => __('Item 1', $domain),
                    'lni-briefcase'     => __('Item 2', $domain),
                    'lni-cog'           => __('Item 3', $domain),
                    'lni-mobile'        => __('Item 4', $domain),
                    'lni-layers'        => __('Item 5', $domain),
                    'lni-rocket'        => __('Item 6', $domain),
                )
        ], 
        'services_title' => [
                'type'      => 'text', 
                'label'     => esc_html__('Add Service Title', $domain), 
                'default'   => '',
        ], 
        'services_desc' => [
                'type'      => 'textarea', 
                'label'     => esc_html__('Add Service Description', $domain), 
                'default'   => '',
        ], 
    ],
    'choices' => [
        'limit' => 6, 
    ] 
       
]);



// Services Item Column 
Kirki::add_field('stacktheme_config', [
        'type'          => 'select', 
        'settings'      => 'services_column', 
        'section'       => 'service_section', 
        'label'         => esc_html__('Services Column Number', $domain), 
        'default'       => 'col-lg-4', 
        'choices'       => [
            'col-lg-6'      => esc_html__('2 Columnns ', $domain),
            'col-lg-4'      => esc_html__('3 Columnns ', $domain),
            'col-lg-3'      => esc_html__('4 Columnns ', $domain),
            'col-lg-2'      => esc_html__('6 Columnns ', $domain),
        ], 
]);

// Services Item Column Align 
Kirki::add_field('stacktheme_config', [
    'type'             => 'radio-buttonset', 
    'settings'         => 'services_columns_alignment', 
    'section'          => 'service_section', 
    'label'            => esc_html__('Services Alignment', $domain), 
    'default'          => 'left', 
    'choices'          => [
        'left'    => esc_html__('Left', $domain),
        'right'   => esc_html__('Right', $domain),
        'center'  => esc_html__('Center', $domain),
    ], 
    'output'    => array(
        array(
            'element'       => '.services-item', 
            'property'      => 'text-align'
        ), 
    )
]); 


// Video Section Customizer 
Kirki::add_section('video_section', array(
        'title'     => esc_html__( 'Video Section', $domain), 
        'panel'     => 'stacktheme_panel', 
        'priotity'  => '130',
));

Kirki::add_field('stacktheme_config', [
    'type'          => 'checkbox', 
    'settings'      => 'show_video_section', 
    'section'       => 'video_section', 
    'label'         => esc_html__('Show Video Section?', $domain), 
    'default'       => true, 
]);

Kirki::add_field('stacktheme_config', [
    'type'             => 'text', 
    'settings'         => 'video_section_title', 
    'section'          => 'video_section', 
    'label'            => esc_html__('Add Video Title', $domain), 
    'default'          => esc_html__('Watch Video', $domain), 
    'transport'        => 'postMessage', 
    'js_vars'          => array(
       array(
               'element'       => '.video_title', 
               'function'      => 'html'
       ),
    )
]); 

Kirki::add_field('stacktheme_config', [
    'type'                  => 'typography', 
    'settings'              => 'video_section_title_typography', 
    'section'               => 'video_section', 
    'label'                 => esc_html__('Video Content Typography', $domain), 
    'default'               => [
        'font-family'       => 'Titillium Web"',
        'font-weight'       => '700', 
        'font-size'         => '30px',
        'color'             => '#222222',
        'line-height'       => '36px',
        'letter-spacing'    => '0',
        'text-transform'    => 'none',
        'text-decoration'   => 'none',
        'text-align'        => 'center',  
    ], 
    'output'                => array(
        'element'     =>  '.video_title', 
        'function'    => 'html'        
    )
]);

//Video URL
Kirki::add_field('stacktheme_config', [
    'type'             => 'url', 
    'settings'         => 'video_url', 
    'section'          => 'video_section', 
    'label'            => esc_html__('Add Video URL', $domain), 
    'default'          => 'https://yoururl.com/', 
]); 

//Video Section Background Image 
Kirki::add_field('stacktheme_config', [
    'type'              => 'background', 
    'settings'          => 'video_section_background', 
    'section'           => 'video_section', 
    'label'             => esc_html__('Add Background Image', $domain), 
    'default'           => [
        'background_color'          => '', 
        'background_image'          => '', 
        'background_repeat'         => 'no-repeat', 
        'background_positon'        => 'center center', 
        'background_size'           => 'cover', 
        'background_attachment'     => 'scroll',
    ], 
    'transport'         => 'auto', 
    'output'            => [
        [
            'element'   => '.video-promo', 
            
        ],
    ],

]);


// Team Section Customizer 
Kirki::add_section('team_section', array(
    'title'     => esc_html__( 'Team Section', $domain), 
    'panel'     => 'stacktheme_panel', 
    'priotity'  => '120',
));

Kirki::add_field('stacktheme_config', [
'type'          => 'checkbox', 
'settings'      => 'team_section_checkbox', 
'section'       => 'team_section', 
'label'         => esc_html__('Show Team Section?', $domain), 
'default'       => true, 
]);


// Team Section Title 
Kirki::add_field('stacktheme_config', [
    'type'             => 'text', 
    'settings'         => 'team_section_title', 
    'section'          => 'team_section', 
    'label'            => esc_html__('Add Team Section Title', $domain), 
    'default'          => esc_html__('Meet our team', $domain), 
    'transport'        => 'postMessage', 
    'js_vars'          => array(
       array(
               'element'       => '.team_title', 
               'function'      => 'html'
       ),
    )
]); 

Kirki::add_field('stacktheme_config', [
    'type'              => 'typography', 
    'settings'          => 'team_section_title_typography', 
    'section'           => 'team_section', 
    'label'             => esc_html__('Services Heading Typography', $domain), 
    'default'           => [
        'font-family'       => 'Titillium Web"',
        'font-weight'       => '700', 
        'font-size'         => '30px',
        'color'             => '#222222',
        'line-height'       => '36px',
        'letter-spacing'    => '0',
        'text-transform'    => 'none',
        'text-decoration'   => 'none',
        'text-align'        => 'center',  
    ], 
    'output'            => array (
        'element'       => '.team_title', 
        'function'      => 'html'
    )
]);

// Team Section Sub-Title Customizer 
Kirki::add_field('stacktheme_config', [
    'type'          => 'textarea', 
    'settings'      => 'team_subtitle', 
    'section'       => 'team_section', 
    'label'         => esc_html__('Add Team Subtitle ', $domain), 
    'default'       => esc_html__('A desire to help and empower others between community contributors in technology
    began to grow in 2024.', $domain), 
    'transport'     => 'postMessage', 
    'js_vars'       => array(
        array(
                'element'       => '.team_subtitle', 
                'function'      => 'html', 
        ),
    )
]); 

// Team Section Team Member
Kirki::add_field('stacktheme_config', [
    'type'          => 'repeater', 
    'settings'      => 'team_member_repeater', 
    'section'       =>  'team_section',
    'label'         => esc_html__('Add New Team Member', $domain), 
    'button_label'  => esc_html__('Add New Members', $domain),
    'row_label'     => [
        'type'      => 'field', 
        'value'     => esc_html__('Add New Item', $domain), 
        'field'     => 'team_item_title', 
    ],
    'fields'        => [
       'team_image' => [
        'type'          => 'image', 
        'label'         =>  esc_html__('Team Member Image', $domain), 
        'default'       => '', 
       ], 
       'team_name'  => [
        'type'          => 'text', 
        'label'         => esc_html__('Team Member Name', $domain), 
        'default'         => esc_html__('Pobitro Deb', $domain),
       ], 
       'team_degination' => [
         'type'         => 'text', 
         'label'        =>  esc_html__('Team Member Degination', $domain), 
         'default'      => esc_html__('Web Developer', $domain)  
       ], 
       'team_facebook' => [
         'type'         => 'link', 
         'label'        =>  esc_html__('Team Member Facebook', $domain), 
         'default'      => '',
       ], 
       'team_twitter' => [
         'type'         => 'link', 
         'label'        =>  esc_html__('Team Member Twitter', $domain), 
         'default'      => '',
       ], 
       'team_instagram' => [
         'type'         => 'link', 
         'label'        =>  esc_html__('Team Member Instagram', $domain), 
         'default'      => '',
       ], 
              
    ]
]); 