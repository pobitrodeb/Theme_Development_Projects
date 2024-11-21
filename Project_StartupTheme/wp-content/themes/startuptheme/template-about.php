<?php 
    /*
        Template Name: Template About
    */
    get_header();
?> 

 <!-- Start Dynamic Breadcumb  -->
 <?php get_template_part('template-parts/content', 'breadcumb') ?>
 <!--End Dynamic Breadcumb -->
<?php get_template_part('template-parts/content', 'about');?>

<?php get_template_part('template-parts/content', 'team');?>

<?php get_footer();?> 