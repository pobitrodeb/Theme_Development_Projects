<?php
    /* Template Name: Template Home */ 
    get_header(); 
?>

    <?php get_template_part('template-parts/content', 'hero') ?>
    <h2>
        <?php echo $redux_demo['opt-text']; ?>
    </h2>
    <p>
        <?php echo $redux_demo['opt-textarea']; ?> 
    </p>
    <?php get_template_part('template-parts/content', 'services'); ?> 
    <?php get_template_part('template-parts/content', 'about')?>

    <?php get_footer(); ?>
  