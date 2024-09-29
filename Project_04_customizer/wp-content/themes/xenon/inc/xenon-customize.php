<?php 

function xenon_customizer($wp_customize){
    $wp_customize -> add_section('bannar_section', array(
        'title' => __('Bannar Section', 'xenon'),
        'priority' => 10,
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

    /* Bannar Description Setting  */
    $wp_customize -> add_setting('bannar_desc', array(
        'default' => __('developer - freelancer - photographer', 'xenon'),
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

}

add_action('customize_register', 'xenon_customizer');