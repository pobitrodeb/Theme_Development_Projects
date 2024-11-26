<?php
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