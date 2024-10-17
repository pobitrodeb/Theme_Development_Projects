<?php 

function xenon_customizer($wp_customize){
    $wp_customize -> add_section('bannar_section', array(
        'title' => __('Bannar Section', 'xenon'),
        'priority' => 10,
    ));

    $wp_customize -> add_setting('bannar_heading', array(
        'default'       => __('I Am xenon doe', 'xenon'),
        'transport'     => 'postMessage',      
    ));

    $wp_customize -> add_control('banner_heading_ctrl', array(
        'label'     =>  __('Write Heading', 'xenon'), 
        'type'      =>  'text', 
        'settings'  =>  'bannar_heading', 
        'section'   =>   'bannar_section'
    ));

    /* Bannar Description Setting  */
    $wp_customize -> add_setting('bannar_desc', array(
        'default' => __('developer - freelancer - photographer', 'xenon'),
        'transport'     => 'postMessage',      
    ));

    /* Bannar Description Control */
    $wp_customize -> add_control('bannar_desc_crtl', array(
        'label'     =>  __('Write Short Description', 'xenon'), 
        'type'      =>  'text', 
        'settings'  =>  'bannar_desc', 
        'section'   =>   'bannar_section'
    ));


    /* Bannar Button Setting  */
     $wp_customize -> add_setting('bannar_btn_text', array(
        'default' => __('Contact Me', 'xenon'),
    ));

    /* Bannar Button Control */
    $wp_customize -> add_control('bannar_btn_text_crtl', array(
        'label'     =>  __('Write Button Text', 'xenon'), 
        'type'      =>  'text', 
        'settings'  =>  'bannar_btn_text', 
        'section'   =>   'bannar_section'
    ));

    /* Bannar Button Link Setting  */
      $wp_customize -> add_setting('bannar_btn_link', array(
        'default' => 'https://www.google.com',
    ));

    /* Bannar Button Link Control */
    $wp_customize -> add_control('bannar_btn_link_crtl', array(
        'label'     =>  'Write Button URL', 
        'type'      =>  'url', 
        'settings'  =>  'bannar_btn_link', 
        'section'   =>   'bannar_section'
    ));

    /* Banner Image  */
    $wp_customize->add_setting('banner_image', array(
       'transport' => 'refresh'       
    )); 

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
            'banner_image_ctrl', array (
                'label'             => __('Upload Image', 'xenon'), 
                'section'           => 'bannar_section', 
                'settings'          => 'banner_image', 
                'button_labels'      => array (
                    'select'        => 'Select Background Image', 
                    'remove'        => 'Remove Back Image', 
                    'change'        => 'Change', 
                )
            )
        )
    );

    /* Heading Checkbox Control Section*/
    $wp_customize->add_section('control_section', array(
        'title'         => __('Control Section', 'xenon'), 
        'priority'      => 20 
    ));

    $wp_customize->add_setting('controls_checkbox', array(
        'default'           => 1, 
        'transport'         => 'refresh' 
    ));

    $wp_customize->add_control('controls_checkbox_ctrl', array(
        'label'             => __('Show Banner Heading', 'xenon'),
        'type'              => 'checkbox', 
        'settings'          => 'controls_checkbox', 
        'section'           => 'control_section'

    )); 

    /* Services Column Control Section*/
    $wp_customize->add_setting('column_box', array(
        'title'         => __('Column Box', 'xenon'), 
        'default'       => 'col-lg-4',
        'transport'     => 'refresh'
    ));
    $wp_customize->add_control('column_box_ctrl', array(
        'label'         => __('Show Services Column Box', 'xenon'), 
        'type'          => 'radio', 
        'choices'       => array(
            'col-lg-2'       => __('6 Columns', 'xenon'),
            'col-lg-3'       => __('4 Columns', 'xenon'),
            'col-lg-4'       => __('3 Columns', 'xenon'),
            'col-lg-6'       => __('2 Columns', 'xenon'),
        ), 
        'settings'       => 'column_box' , 
        'section'        => 'control_section' 
    ));

    /* Projects Column Control Section*/
    $wp_customize->add_setting('project_column_box', array(
        'title'         => __('Project Column Box', 'xenon'), 
        'default'       => 'col-lg-4', 
        'transport'     => 'refresh'    
    )); 
    $wp_customize->add_control('project_column_box_ctrl', array(
         'label'        => __('Show Project Column Box', 'xenon'), 
         'type'         => 'select', 
         'choices'      => array(
            'col-lg-2'       => __('6 Columns', 'xenon'),
            'col-lg-3'       => __('4 Columns', 'xenon'),
            'col-lg-4'       => __('3 Columns', 'xenon'),
            'col-lg-6'       => __('2 Columns', 'xenon'),
         ), 
         'settings'     => 'project_column_box', 
         'section'      => 'control_section'   
    ));

}

add_action('customize_register', 'xenon_customizer');