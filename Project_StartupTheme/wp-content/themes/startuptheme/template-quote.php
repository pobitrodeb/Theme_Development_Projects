<?php
    
    /*
        Template Name: Template Quote
    */
    get_header();
?> 

 <!-- Start Dynamic Breadcumb  -->
 <?php get_template_part('template-parts/content', 'breadcumb') ?>
 <!--End Dynamic Breadcumb -->
 
<?php get_template_part('template-parts/content', 'quote');?>

<?php get_footer();?> 