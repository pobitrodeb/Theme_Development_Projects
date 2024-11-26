<?php
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
