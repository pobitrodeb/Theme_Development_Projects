<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri()?>/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head();?> 
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <?php
                        if(class_exists('ACF')){
                            $header_infromation = get_field('header_info', 'options'); 
                            foreach($header_infromation as $header_info){
                                ?>
                                <small class="me-3 text-light"><i class="fa <?php echo $header_info['header_icons']; ?> me-2"></i><?php echo $header_info['header_text']; ?></small>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <?php
                        if(class_exists('ACF')){
                            $header_social_profiles = get_field('header_social', 'options'); 
                            // print_r($header_social_profiles);
                            foreach($header_social_profiles as $header_social){
                               ?>
                                     <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php echo $header_social['social_url']; ?>"><i class="fab <?php echo $header_social['social_icon']; ?>"></i></a>
                               <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="<?php echo site_url();?> " class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <!-- Dynamic Menu Bar but now shwo. Need CSS changed -->
                    <!-- <?php 
                            wp_nav_menu(array(
                                    'theme_location'    => 'primary_menu',
                            ));
                    // ?>  -->
                    <ul>
                        <li><a href="<?php site_url();?> " class="nav-item nav-link">Home</a></li>
                        <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/about/" class="nav-item nav-link">About</a></li>
                        <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/services/" class="nav-item nav-link">Services</a></li>
                        <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/blog/" class="nav-item nav-link">Blog</a>
                            <!-- <ul>
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="detail.html">Blog Detail</a></li>
                            </ul> -->
                        </li>
                        <li><a href="#" class="nav-item nav-link">Pages</a>
                            <ul>
                                <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/price/">Pricing Plan</a></li>
                                <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/feature">Our features</a></li>
                                <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/team">Team Members</a></li>
                                <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/testimonial">Testimonial</a></li>
                                <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/price/quote">Free Quote</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/Theme_Development_Projects/Project_StartupTheme/index.php/contact" class="nav-item nav-link">Contact</a></li>
                    </ul>                    
                </div>
            </div>
        </nav>