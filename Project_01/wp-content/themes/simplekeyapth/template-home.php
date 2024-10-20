    <?php
        /* Template Name: Template Home */ 
        get_header(); 
    ?>

   
    <?php get_template_part('template-parts/content', 'hero') ?>
    <h1> This Data show by Redux Framework </h1> </br> </br> </br> 
    <h2>
        <?php echo $redux_demo['opt-text']; ?>
    </h2>
    <p>
        <?php echo $redux_demo['opt-textarea']; ?> 
    </p>
    <img src="<?php echo $redux_demo['opt-media']['url']?> " alt="">
     
    <?php 
        $gallery        = $redux_demo['opt-gallery']; 
        $gallerys       = explode (',', $gallery); 

        foreach($gallerys as $image)
        {
            $single_image = wp_get_attachment_image_src($image); 
        ?> 
            <img src="<?php echo $single_image[0] ?>" alt="">
         <?php
        }
    ?> 
   
    <?php get_template_part('template-parts/content', 'services'); ?> 
    <?php get_template_part('template-parts/content', 'about')?>
    <?php get_footer(); ?>
  