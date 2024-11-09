<?php
// TGMPA Plugin Configuration 

function halimye_plugin_activation(){
    $plugins            = array(
        array (
            'name'      => 'Contact Form 7', 
            'slug'      => 'contact-form-7', 
            'required'  => true,     
        ),
        array (
            'name'      => 'One Click Demo Import', 
            'slug'      => 'one-click-demo-import', 
            'required'  => true,     
        ),
        array (
            'name'      => 'Advanced Custom Fields: Font Awesome Field', 
            'slug'      => 'advanced-custom-fields-font-awesome', 
            'required'  => true,     
        ),
        array (
            'name'      => 'Classic Editor', 
            'slug'      => 'classic-editor', 
            'required'  => true,     
        ),
        array (
            'name'      => 'Halimye Custom Post Plugin', 
            'slug'      => 'halimye-custom-post', 
            'source'    => get_template_directory(). '/plugins/halimye-custom-post.zip',
            'required'  => true,     
        ),
        array (
            'name'      => 'Advanced Custom Fields PRO', 
            'slug'      => 'advanced-custom-fields-pro', 
            'source'    => get_template_directory(). '/plugins/advanced-custom-fields-pro.zip',
            'required'  => true,     
        ),
       
    );

    $config  = array(
        'id'            => 'halimye-plugin-active', 
        'menu'          => 'Halimye Plugin Activation', 
        'parent_slug'   => 'themes.php', 
        'has_notices'   => true
    );
    tgmpa( $plugins, $config );

}
add_action('tgmpa_register', 'halimye_plugin_activation');