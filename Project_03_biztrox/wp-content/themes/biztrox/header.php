<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>BIZTROX</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  

  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/x-icon">
    <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?> >
  

<!-- preloader start -->
<div class="preloader">
    <img src="<?php echo get_template_directory_uri();?>/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<?php get_template_part('template-parts/content', 'header'); ?> 
<?php get_template_part('template-parts/content', 'slider'); ?> 
