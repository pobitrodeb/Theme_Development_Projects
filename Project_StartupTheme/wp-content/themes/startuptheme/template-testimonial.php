<?php
    
    /*
        Template Name: Template Testimonial
    */
    get_header();
?> 

 <!-- Start Dynamic Breadcumb  -->
 <?php get_template_part('template-parts/content', 'breadcumb') ?>
 <!--End Dynamic Breadcumb -->

<?php get_template_part('template-parts/content', 'testimonial');?>

<?php get_footer();?> 