<?php
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
