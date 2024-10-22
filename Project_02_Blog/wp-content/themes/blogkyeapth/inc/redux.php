<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Blogkeypath Options', 'blogkeyapth' ),
        'customizer'           => false,
    );

    Redux::set_args( $opt_name, $args );

    Redux::set_section( 
        $opt_name, 
        array(
            'title'  => esc_html__( 'Blogkeypath Field', 'blogkeyapth' ),
            'id'     => 'basic',
            'desc'   => esc_html__( 'Blogkeypath Field Description', 'blogkeyapth' ),
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'       => 'opt-logo',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => esc_html__('Logo', 'blogkeyapth'),
                    'desc'     => esc_html__('Your website logo', 'blogkeyapth'),
                    'default'  => array(
                        'url'=> get_template_directory_uri(). '/assets/img/logo.png'
                    ),
                ),
                array(
                    'id'       => 'opt-text',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Services Heading', 'blogkeyapth' ),
                    'desc'     => esc_html__( 'write services section heading title', 'blogkeyapth' ),
                   
                ),
                 
                array(
                    'id'        => 'opt-content', 
                    'type'      => 'textarea', 
                    'title'     => esc_html__('Services Short Description', 'blogkeyapth'), 
                ), 
                array( 
                'id'          => 'opt-typography',
                    'type'        => 'typography', 
                    'title'       => esc_html__('Typography', 'blogkeyapth'),
                    'google'      => true, 
                    'font-backup' => true,
                    'color'       => false,  
                    'output'      => array('h4', 'h3'),
                    'units'       =>'px',
                    'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'blogkeyapth'),
                    'default'     => array(
                        'font-style'  => '700', 
                        'font-family' => 'Montserrat', 
                        'google'      => true,
                        'font-size'   => '33px', 
                        'line-height' => '40'
                    ),
                ),
                
                array(
                    'id'       => 'opt-color',
                    'type'     => 'color',
                    'title'    => esc_html__('Body Text Color', 'blogkeyapth'), 
                    'subtitle' => esc_html__('Pick a background color for the theme (default: #fff).', 'blogkeyapth'),
                    'default'  => '#FFFFFF',
                    'validate' => 'color',
                    'output'      => array('p'),
                ),
                array(
                    'id'       => 'opt-background',
                    'type'     => 'color',
                    'title'    => esc_html__('Section Background Color', 'blogkeyapth'), 
                    'subtitle' => esc_html__('Pick a background color for the theme (default: #fff).', 'blogkeyapth'),
                    'default'  => '#000000',
                    'validate' => 'color',
                   
                ),

                array(
 
                    'id'       => 'opt-link-color',
                    'type'     => 'link_color',
                    'output'   => array('.single-blog a'),      
                    'title'    => esc_html__('Links Color Option', 'your-textdomain-here'),
                    'subtitle' => esc_html__('Only color validation can be done on this field type', 'your-textdomain-here'),
                    'desc'     => esc_html__('This is the description field, again good for additional info.', 'your-textdomain-here'),
                    'default'  => array(
                        'regular'  => '#1e73be', // blue
                        'hover'    => '#dd3333', // red
                        'active'   => '#8224e3',  // purple
                        'visited'  => '#8224e3',  // purple
                    )
                )

                
        ),  
    ) 
);
