<?php get_header();?> 

 <!-- Start Dynamic Breadcumb  -->
 <?php get_template_part('template-parts/content', 'breadcumb') ?>
 <!--End Dynamic Breadcumb -->
 
    <!-- Page  Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
           <?php echo the_content();?> 
        </div>
    </div>
    <!-- Page End -->

<?php get_footer();?> 
