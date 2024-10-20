<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'simplekeyapth' ),
        'customizer'           => false,
    );

    Redux::set_args( $opt_name, $args );

    Redux::set_section( 
        $opt_name, 
        array(
            'title'  => esc_html__( 'Basic Field', 'simplekeyapth' ),
            'id'     => 'basic',
            'desc'   => esc_html__( 'Basic field with no subsections.', 'simplekeyapth' ),
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'       => 'opt-text',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Example Text', 'simplekeyapth' ),
                    'desc'     => esc_html__( 'Example description.', 'simplekeyapth' ),
                    'subtitle' => esc_html__( 'Example subtitle.', 'simplekeyapth' ),
                    'hint'     => array(
                        'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                    )
                ), 
                array(
                    'id'       => 'opt-textarea',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Example Textarea', 'simplekeyapth' ),
                    'desc'     => esc_html__( 'Example description.', 'simplekeyapth' ),
                    'subtitle' => esc_html__( 'Example subtitle.', 'simplekeyapth' ),
                ),
                
                array(
                    'id'       => 'opt-media',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => esc_html__('Upload Your Logo', 'simplekeyapth'),
                    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'simplekeyapth'),
                    'subtitle' => esc_html__('Upload you logo', 'simplekeyapth'),
                    'default'  => array(
                        'url'      => get_template_directory_uri(). '/assets/img/logo.png'
                    ) 
                ),

                array(
                    'id'       => 'opt-gallery',
                    'type'     => 'gallery',  
                    'title'    => esc_html__('Gallery', 'simplekeyapth'),
                    'subtitle' => esc_html__('Create a new Gallery by selecting existing ', 'simplekeyapth'),
                    'desc'     => esc_html__('This is the description field, again good for additional info.', 'simplekeyapth'),
                ),

                // Typography  
            array( 
                'id'          => 'opt-typography',
                'type'        => 'typography', 
                'title'       => esc_html__('H1 Typography', 'simplekeyapth'),
                'google'      => true, 
                'font-backup' => true,
                'color'       => false, 
                'output'      => array('h1'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'simplekeyapth'),
                'default'     => array(
                  
                    'font-style'  => '700', 
                    'font-family' => 'Abel', 
                    'google'      => true,
                    'font-size'   => '33px', 
                    'line-height' => '40'
                ),
            )
                
        )
    ) 
);
