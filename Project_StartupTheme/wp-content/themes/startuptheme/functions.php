<?php 
function start_theme_support(){
    add_theme_support('title-tag');
    load_theme_textdomain( 'startuptheme', get_template_directory() . '/languages' );
    add_theme_support('post-thumbnails', array('sliders', 'testimonials', 'post',)); 

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


        // Team Members Custom Post Added 
         $labels = array(
            'name'                  => __( 'Teams', 'Post type general name', 'startuptheme' ),
            'singular_name'         => __( 'Team', 'Post type singular name', 'startuptheme' ),
            'menu_name'             => __( 'Teams', 'Admin Menu text', 'startuptheme' ),
            'name_admin_bar'        => __( 'Teams', 'Add New on Toolbar', 'startuptheme' ),
            'add_new'               => __( 'Add New', 'startuptheme' ),
            'add_new_item'          => __( 'Add New Team', 'startuptheme' ),
            'new_item'              => __( 'New Team', 'startuptheme' ),
            'edit_item'             => __( 'Edit Team', 'startuptheme' ),
            'view_item'             => __( 'View Team', 'startuptheme' ),
            'all_items'             => __( 'All Team', 'startuptheme' ),
            'search_items'          => __( 'Search Team', 'startuptheme' ),
            'parent_item_colon'     => __( 'Parent Teamz:', 'startuptheme' ),
            'not_found'             => __( 'No Team found.', 'startuptheme' ),
            'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'startuptheme' ),
            'featured_image'        => __( 'Team Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            'set_featured_image'    => __( 'Set Teams image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            'remove_featured_image' => __( 'Remove Teams image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startuptheme' ),
            
        );  
        $args = array(
            'labels'             => $labels,
            'description'        => 'Teams custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'team' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-businesswoman',   
            'supports'           => array( 'title', 'custom-fields' ),
        );
        register_post_type('team', $args);

}

add_action('init', 'statuptheme_custom_post_type');



/**
 * Sidebar REgister 
 */
function startuptheme_sidebar_register() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'startuptheme' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startuptheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-5">
                            <h3 class="mb-0">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'startuptheme_sidebar_register' );
/**
 * Footer Address Sidebar 
 */
function startuptheme_footer_adress_sidebar_register() {
	register_sidebar( array(
		'name'          => __( 'Footer Address Sidebar', 'startuptheme' ),
		'id'            => 'footer-address-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startuptheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title section-title-sm position-relative py-5">
                            <h3 class="text-light mb-0">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'startuptheme_footer_adress_sidebar_register' );

/**
* Custom Widgets Start 
*/
// Creating the widget
class startuptheme_search_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'startuptheme_search_widget',
 
            // Widget name will appear in UI
            __( 'Startuptheme Search Widget', 'startuptheme' ),
 
            // Widget description
            [
                'description' => __( 'Startuptheme Search Widget', 'startuptheme' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
            
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                       
                            <form action="<?php echo home_url('/'); ?>" method="get">
                            <div class="input-group">
                                <input type="search" name="s" class="form-control p-3" placeholder="Search Keyword" value="<?php echo get_search_query();?>">
                                <button type="submit" class="btn btn-primary px-4"><i class="fa  fa-search"></i></button>
                            </div>
                            </form>
                        
                    </div>
                    <!-- Search Form End -->

        <?php
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'New title', 'startuptheme' );
        }
 
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function startuptheme_load_widget() {
    register_widget( 'startuptheme_search_widget' );
}
 
add_action( 'widgets_init', 'startuptheme_load_widget' );



// Create Categoris widget
class startuptheme_categories_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'startuptheme_categories_widget',
 
            // Widget name will appear in UI
            __( 'Startuptheme Categories Widget', 'startuptheme' ),
 
            // Widget description
            [
                'description' => __( 'Startuptheme Categories Widget', 'startuptheme' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
           <div class="link-animated d-flex flex-column justify-content-start">
           <?php
                $categories = get_categories(); 
                foreach($categories as $category){
                    ?>
                    <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo get_category_link($category->term_id); ?>"><i class="fa fa-arrow-right me-2"></i>
                        <?php echo $category->name?> -(<?php echo $category->count?>)
                    </a>
                    <?php
                }
            ?>
              
            </div>

        <?php
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'New title', 'startuptheme' );
        }
 
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function startuptheme_category_load_widget() {
    register_widget( 'startuptheme_categories_widget' );
}
 
add_action( 'widgets_init', 'startuptheme_category_load_widget' );



// Create Latest widget
class startuptheme_recent_post_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'startuptheme_recent_post_widget',
 
            // Widget name will appear in UI
            __( 'Startuptheme Latest Post Widget', 'startuptheme' ),
 
            // Widget description
            [
                'description' => __( 'Startuptheme Latest Post Widget', 'startuptheme' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
        <?php
            $arg = array(
                'post_type'             => 'post', 
                'posts_per_page'        => 5, 
                'order_by'              => 'DESC', 
            );

            $query = new WP_Query($arg); 
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post(); 
                    ?> 
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="<?php echo the_title(); ?>">
                            <a href="<?php the_permalink(); ?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                                <?php echo the_title();?>
                            </a>
                        </div>
                    <?php
                }
                wp_reset_postdata(); 
            }
        ?>
        <?php
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'New title', 'startuptheme' );
        }
 
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function startuptheme_recent_post_load_widget() {
    register_widget( 'startuptheme_recent_post_widget' );
}
 
add_action( 'widgets_init', 'startuptheme_recent_post_load_widget' );



// Create Tag widget
class startuptheme_tag_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'startuptheme_tag_widget',
 
            // Widget name will appear in UI
            __( 'Startuptheme Tags Widget', 'startuptheme' ),
 
            // Widget description
            [
                'description' => __( 'Startuptheme Tags Widget', 'startuptheme' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
             <div class="d-flex flex-wrap m-n1">
                <?php
                    $tags = get_tags(); 
                    foreach($tags as $tag){
                       ?>
                       <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-light m-1"><?php echo $tag->name; ?></a>

                       <?php
                    }
                ?>
            </div>
        <?php
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Tags Clouds', 'startuptheme' );
        }
 
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function startuptheme_tags_load_widget() {
    register_widget( 'startuptheme_tag_widget' );
}
 
add_action( 'widgets_init', 'startuptheme_tags_load_widget' );



// Create Plain Text widget
class startuptheme_plain_text_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'startuptheme_plain_text_widget',
 
            // Widget name will appear in UI
            __( 'Startuptheme Plain Text Widget', 'startuptheme' ),
 
            // Widget description
            [
                'description' => __( 'Startuptheme Plain Text Widget', 'startuptheme' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title                          = apply_filters( 'widget_title', $instance['title'] );
        $plain_text_view                     = $instance['plain_text']; 
        $plain_text_btn_title_view           = $instance['plain_text_btn_title']; 
        $plain_text_btn_url_view           = $instance['plain_text_btn_url']; 

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
            <div class="bg-light text-center" style="padding: 30px;">
                <p><?php echo $plain_text_view; ?></p>
                <a href="<?php echo  $plain_text_btn_url_view; ?>" class="btn btn-primary py-2 px-4">
                    <?php echo $plain_text_btn_title_view; ?>
                </a>
            </div>
        <?php
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Plain Text', 'startuptheme' );
        }
            $plain_text             = $instance['plain_text']; 
            $plain_text_btn_title   = $instance['plain_text_btn_title']; 
            $plain_text_btn_url     = $instance['plain_text_btn_url']; 
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'plain_text' ); ?>">
                <?php _e( 'Text Content:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'plain_text' ); ?>"
                    name="<?php echo $this->get_field_name( 'plain_text' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $plain_text ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'plain_text_btn_title' ); ?>">
                <?php _e( 'Text Button Lable :', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'plain_text_btn_title' ); ?>"
                    name="<?php echo $this->get_field_name( 'plain_text_btn_title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $plain_text_btn_title ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'plain_text_btn_url' ); ?>">
                <?php _e( 'Text Button URL:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'plain_text_btn_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'plain_text_btn_url' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $plain_text_btn_url ); ?>"
            />
        </p>
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['plain_text'] = $new_instance['plain_text'];
        $instance['plain_text_btn_title'] = $new_instance['plain_text_btn_title'];
        $instance['plain_text_btn_url']   = $new_instance['plain_text_btn_url'];
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function startuptheme_plain_text_load_widget() {
    register_widget( 'startuptheme_plain_text_widget' );
}
add_action( 'widgets_init', 'startuptheme_plain_text_load_widget' );


////////////////////////////////////////////////////////////////////// Create Footer Address Widget 
class startuptheme_footer_address_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'startuptheme_footer_address_widget',
 
            // Widget name will appear in UI
            __( 'Startuptheme Footer Address Widget', 'startuptheme' ),
 
            // Widget description
            [
                'description' => __( 'Startuptheme Footer Address Widget', 'startuptheme' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title                          = apply_filters( 'widget_title', $instance['title'] );
        $footer_address             = $instance['footer_address'];
        $footer_email               = $instance['footer_email'];
        $footer_mobile              = $instance['footer_mobile'];
        $footer_phone               = $instance['footer_phone'];
        //social 
        $footer_facebook_url        = $instance['footer_facebook_url'];
        $footer_twitter_url         = $instance['footer_twitter_url'];
        $footer_linkedIn_url        = $instance['footer_linkedIn_url'];
        $footer_instagram_url       = $instance['footer_instagram_url'];

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
            <div class="col-lg-4 col-md-12 pt-5 mb-5">
                           
                          <?php
                            if($footer_address){
                                ?>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-home text-primary me-2 mt-1"></i>
                                        <p class="mb-0"><?php echo $footer_address; ?></p>
                                    </div>
                                <?php
                            }
                          ?>
                            <?php
                                if($footer_email){
                                    ?>
                                        <div class="d-flex mb-2">
                                            <i class="far fa-envelope text-primary me-2 mt-1"></i>
                                            <p class="mb-0"><?php echo $footer_email; ?></p>
                                        </div>
                                    <?php
                                }
                            ?>
                           <?php
                                if($footer_mobile){
                                    ?>
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-phone-alt text-primary me-2 mt-1"></i>
                                            <p class="mb-0"><?php echo $footer_mobile; ?></p>
                                        </div>
                                    <?php
                                }
                           ?>

                            <?php
                                if($footer_phone){
                                    ?>
                                        <div class="d-flex mb-2">
                                             <i class="fas fa-phone-alt text-primary me-2 mt-1"></i>
                                            <p class="mb-0"><?php echo $footer_phone; ?></p>
                                        </div>
                                    <?php
                                }
                            ?>    

                            <div class="d-flex mt-4">
                               <?php
                                if($footer_facebook_url){
                                    ?>
                                         <a class="btn btn-primary btn-square me-2" href="<?php echo $footer_facebook_url;?>"><i class="fab fa-twitter fw-normal"></i></a>
                                    <?php
                                }
                               ?>
                           <?php
                                if($footer_twitter_url){
                                    ?>
                                        <a class="btn btn-primary btn-square me-2" href="<?php echo $footer_twitter_url;?>"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <?php
                                }
                            ?>
                            <?php
                                if($footer_linkedIn_url){
                                    ?>
                                    <a class="btn btn-primary btn-square me-2" href="<?php echo $footer_linkedIn_url;?>"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <?php
                                }
                            ?>
                            <?php
                            if($footer_instagram_url){
                                ?>
                                 <a class="btn btn-primary btn-square" href="<?php echo $footer_instagram_url;?>"><i class="fab fa-instagram fw-normal"></i></a>
                                <?php
                            }
                            ?>   
                            </div>
            </div>
        <?php
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Get In Touch', 'startuptheme' );
        }
        
        $footer_address             = $instance['footer_address'];
        $footer_email               = $instance['footer_email'];
        $footer_mobile              = $instance['footer_mobile'];
        $footer_phone               = $instance['footer_phone'];
        //social 
        $footer_facebook_url        = $instance['footer_facebook_url'];
        $footer_twitter_url         = $instance['footer_twitter_url'];
        $footer_linkedIn_url        = $instance['footer_linkedIn_url'];
        $footer_instagram_url       = $instance['footer_instagram_url'];
       
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'footer_address' ); ?>">
                <?php _e( 'Footer Address:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_address' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_address' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $footer_address ); ?>"
            />
        </p>

      
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_email' ); ?>">
                <?php _e( 'Footer Email:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_email' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_email' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $footer_email ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_mobile' ); ?>">
                <?php _e( 'Footer Mobile:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_mobile' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_mobile' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $footer_mobile ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_phone' ); ?>">
                <?php _e( 'Footer Phone :', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_phone' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_phone' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $footer_phone ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_facebook_url' ); ?>">
                <?php _e( 'Footer Facbook Link:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_facebook_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_facebook_url' ); ?>"
                    type="url"
                    value="<?php echo esc_attr( $footer_facebook_url ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_twitter_url' ); ?>">
                <?php _e( 'Footer Twitter Link:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_twitter_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_twitter_url' ); ?>"
                    type="url"
                    value="<?php echo esc_attr( $footer_twitter_url ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_linkedIn_url' ); ?>">
                <?php _e( 'Footer LinkedIn Link:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_linkedIn_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_linkedIn_url' ); ?>"
                    type="url"
                    value="<?php echo esc_attr( $footer_linkedIn_url ); ?>"
            />
        </p>
      
        <p>
            <label for="<?php echo $this->get_field_id( 'footer_instagram_url' ); ?>">
                <?php _e( 'Footer Instagram Link:', 'startuptheme' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'footer_instagram_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'footer_instagram_url' ); ?>"
                    type="url"
                    value="<?php echo esc_attr( $footer_instagram_url ); ?>"
            />
        </p>
      
       
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
      
        $instance['footer_address']        = $new_instance['footer_address'];
        $instance['footer_email']          = $new_instance['footer_email'];
        $instance['footer_mobile']         = $new_instance['footer_mobile'];
        $instance['footer_phone']          = $new_instance['footer_phone'];
        $instance['footer_facebook_url']   = $new_instance['footer_facebook_url'];
        $instance['footer_twitter_url']    = $new_instance['footer_twitter_url'];
        $instance['footer_linkedIn_url']   = $new_instance['footer_linkedIn_url'];
        $instance['footer_instagram_url']  = $new_instance['footer_instagram_url'];
   
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function startuptheme_footer_address_load_widget() {
    register_widget( 'startuptheme_footer_address_widget' );
}
add_action( 'widgets_init', 'startuptheme_footer_address_load_widget' );