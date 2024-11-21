<?php 
    /*
        Template Name: Template Services
    */
    get_header();
?> 

 <!-- Start Dynamic Breadcumb  -->
 <?php get_template_part('template-parts/content', 'breadcumb') ?>
 <!--End Dynamic Breadcumb -->
 
    <?php get_template_part('template-parts/content', 'services');?>

    <?php get_template_part('template-parts/content', 'testimonial');?>


   <?php get_footer(); ?>