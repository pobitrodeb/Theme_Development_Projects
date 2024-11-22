<?php 
function start_theme_support(){
    add_theme_support('title-tag');
    load_theme_textdomain( 'startuptheme', get_template_directory() . '/languages' );
    add_theme_support('post-thumbnails', array('sliders', 'testimonials', )); 

    register_nav_menus(array(
        'primary_menu'  => __('Primary Menus', 'startuptheme'),
    ));

}

add_action('after_setup_theme','start_theme_support'); 


function startuptheme_enqueue_scripts(){
    /**
        * Enqueue CSS files for Startup Theme.
    */
      // Google Font Stylesheet
      wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), '1.0.0', 'all' );
    
      // Icon Font Stylesheet
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '6.0.0', 'all' );

    // Libraries Stylesheet
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1', 'all' );

    // Customized Bootstrap Stylesheet
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0', 'all' );

    // Template Stylesheet
    wp_enqueue_style( 'startuptheme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );

    /**
     * Enqueue JavaScript files for Startup Theme.
     */
    // jQuery Library
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', true );

    // Bootstrap Bundle JS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.0', true );
   
    // WOW.js
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.1.3', true );
   
    // Waypoints Library
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), '4.0.1', true );
   
    // Counterup Library
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array( 'jquery', 'waypoints' ), '1.0', true );
   
    // Owl Carousel
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
   
    // Main Template JavaScript
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'startuptheme_enqueue_scripts' );

// Add ACF Json Data File 
function startuptheme_acf_json_backup() {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'startuptheme_acf_json_backup' );



//Register Custom Post Type 
function statuptheme_custom_post_type(){

    // Slider Custom Post Added 
    $labels = array(
        'name'                  => __( 'Sliders', 'Post type general name', 'startuptheme' ),
        'singular_name'         => __( 'Slider', 'Post type singular name', 'startuptheme' ),
        'menu_name'             => __( 'Sliders', 'Admin Menu text', 'startuptheme' ),
        'name_admin_bar'        => __( 'Sliders', 'Add New on Toolbar', 'startuptheme' ),
        'add_new'               => __( 'Add New', 'startuptheme' ),
        'add_new_item'          => __( 'Add New Slider', 'startuptheme' ),
        'new_item'              => __( 'New Slider', 'startuptheme' ),
        'edit_item'             => __( 'Edit Slider', 'startuptheme' ),
        'view_item'             => __( 'View Slider', 'startuptheme' ),
        'all_items'             => __( 'All Sliders', 'startuptheme' ),
        'search_items'          => __( 'Search Sliders', 'startuptheme' ),
        'parent_item_colon'     => __( 'Parent Sliders:', 'startuptheme' ),
        'not_found'             => __( 'No Sliders found.', 'startuptheme' ),
        
        
    );  
    $args = array(
        'labels'             => $labels,
        'description'        => 'Sliders custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sliders' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-slides',   
        'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
    );
    register_post_type('sliders', $args);

     // Services Custom Post Added 
     $labels = array(
        'name'                  => __( 'Services', 'Post type general name', 'startuptheme' ),
        'singular_name'         => __( 'Service', 'Post type singular name', 'startuptheme' ),
        'menu_name'             => __( 'Services', 'Admin Menu text', 'startuptheme' ),
        'name_admin_bar'        => __( 'Services', 'Add New on Toolbar', 'startuptheme' ),
        'add_new'               => __( 'Add New', 'startuptheme' ),
        'add_new_item'          => __( 'Add New Service', 'startuptheme' ),
        'new_item'              => __( 'New Service', 'startuptheme' ),
        'edit_item'             => __( 'Edit Service', 'startuptheme' ),
        'view_item'             => __( 'View Services', 'startuptheme' ),
        'all_items'             => __( 'All Services', 'startuptheme' ),
        'search_items'          => __( 'Search Services', 'startuptheme' ),
        'parent_item_colon'     => __( 'Parent Services:', 'startuptheme' ),
        'not_found'             => __( 'No Services found.', 'startuptheme' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'startuptheme' ),
        'featured_image'        => __( 'Services Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startuptheme' ),
        'set_featured_image'    => __( 'Set Services image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
        'remove_featured_image' => __( 'Remove Services image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
        
    );  
    $args = array(
        'labels'             => $labels,
        'description'        => 'Services custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-admin-generic',   
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
    );
    register_post_type('services', $args);

         // Price Custom Post Added 
         $labels = array(
            'name'                  => __( 'Prices', 'Post type general name', 'startuptheme' ),
            'singular_name'         => __( 'Price', 'Post type singular name', 'startuptheme' ),
            'menu_name'             => __( 'Prices', 'Admin Menu text', 'startuptheme' ),
            'name_admin_bar'        => __( 'Prices', 'Add New on Toolbar', 'startuptheme' ),
            'add_new'               => __( 'Add New', 'startuptheme' ),
            'add_new_item'          => __( 'Add New Price', 'startuptheme' ),
            'new_item'              => __( 'New Price', 'startuptheme' ),
            'edit_item'             => __( 'Edit Price', 'startuptheme' ),
            'view_item'             => __( 'View Prices', 'startuptheme' ),
            'all_items'             => __( 'All Price', 'startuptheme' ),
            'search_items'          => __( 'Search Prices', 'startuptheme' ),
            'parent_item_colon'     => __( 'Parent Prices:', 'startuptheme' ),
            'not_found'             => __( 'No Prices found.', 'startuptheme' ),
            'not_found_in_trash'    => __( 'No Prices found in Trash.', 'startuptheme' ),
            'featured_image'        => __( 'Prices Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            'set_featured_image'    => __( 'Set Prices image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            'remove_featured_image' => __( 'Remove Prices image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            
        );  
        $args = array(
            'labels'             => $labels,
            'description'        => 'Prices custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'prices' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-admin-users',   
            'supports'           => array( 'title', 'custom-fields' ),
        );
        register_post_type('prices', $args);

        
        
        // Testimonial Custom Post Added 
         $labels = array(
            'name'                  => __( 'Testimonials', 'Post type general name', 'startuptheme' ),
            'singular_name'         => __( 'Testimonial', 'Post type singular name', 'startuptheme' ),
            'menu_name'             => __( 'Testimonials', 'Admin Menu text', 'startuptheme' ),
            'name_admin_bar'        => __( 'Testimonials', 'Add New on Toolbar', 'startuptheme' ),
            'add_new'               => __( 'Add New', 'startuptheme' ),
            'add_new_item'          => __( 'Add New Testimonial', 'startuptheme' ),
            'new_item'              => __( 'New Testimonial', 'startuptheme' ),
            'edit_item'             => __( 'Edit Testimonial', 'startuptheme' ),
            'view_item'             => __( 'View Testimonials', 'startuptheme' ),
            'all_items'             => __( 'All Testimonial', 'startuptheme' ),
            'search_items'          => __( 'Search Testimonials', 'startuptheme' ),
            'parent_item_colon'     => __( 'Parent Testimonials:', 'startuptheme' ),
            'not_found'             => __( 'No Testimonials found.', 'startuptheme' ),
            'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'startuptheme' ),
            'featured_image'        => __( 'Testimonials Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            'set_featured_image'    => __( 'Set Testimonials image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            'remove_featured_image' => __( 'Remove Testimonials image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            
        );  
        $args = array(
            'labels'             => $labels,
            'description'        => 'Testimonials custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'testimonials' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-testimonial',   
            'supports'           => array( 'title', 'custom-fields' ),
        );
        register_post_type('testimonials', $args);

}

add_action('init', 'statuptheme_custom_post_type');