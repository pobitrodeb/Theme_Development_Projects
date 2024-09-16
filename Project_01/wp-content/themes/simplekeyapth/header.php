<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Home | Simple Project</title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="area">
        <!-- Header Start Here -->
        <div class="header fix">
            <div class="logo">
                <a href="index.php">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <?php wp_nav_menu(array(
                    'theme_location'    => 'main-menu',
                    'container-class'   => 'main-menu-container-classs', 
                    'menu-class'        => 'main-menu-class', 
                    'menu-id'           => 'main-menu-id', 
                )); ?>
            </div>
        </div>
        <!-- Header End Here -->