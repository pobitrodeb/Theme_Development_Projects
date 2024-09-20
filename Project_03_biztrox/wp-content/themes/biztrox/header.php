<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>BIZTROX</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/bootstrap/bootstrap.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/magnific-popup/magnific-popup.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/slick/slick-theme.css">
  <!-- themify icon -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/themify-icons/themify-icons.css">
  <!-- animate -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/animate/animate.css">
  <!-- Aos -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/aos/aos.css">
  <!-- swiper -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/swiper/swiper.min.css">
  <!-- Stylesheets -->
  <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
  
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
