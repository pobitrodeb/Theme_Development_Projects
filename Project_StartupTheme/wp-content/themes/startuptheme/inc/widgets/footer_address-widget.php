<?php

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