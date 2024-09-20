
<?php get_header(); ?> 

<?php get_template_part('template-parts/content', 'banner'); ?> 

<?php get_template_part('template-parts/content', 'services'); ?> 

 <!-- Blog Start Here -->
 <div class="blogs">
     <div class="blog-left">
         <h4>Posts By : <?php the_author(); ?> </h4>
         <?php get_template_part('template-parts/content', 'blogs'); ?> 
     </div>

     <h2>About Author: </h2>
    <h3>  <?php the_author_meta( 'display_name' ); ?></h3>
    <h5>  <?php the_author_meta( 'email' ); ?></h5> 
     <?php get_sidebar(); ?> 
 
 </div>
 <!-- Blog End Here -->
<?php get_footer(); ?> 