<?php

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