
<?php
    /*
        /*
        Template Name: Template Team
    */

    get_header();
?> 

 <!-- Start Dynamic Breadcumb  -->
 <?php get_template_part('template-parts/content', 'breadcumb') ?>
 <!--End Dynamic Breadcumb -->
 
<?php get_template_part('template-parts/content', 'team');?>

<?php wp_footer();?> 