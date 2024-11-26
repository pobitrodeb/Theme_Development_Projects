<?php

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
