<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
</head>
<body>
    <div class="area">
        <!-- Header Start Here -->
        <div class="header fix">
            <div class="logo">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Header End Here -->
        
         <!-- Banner Start Here -->
         <div class="banner owl-carousel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Banner">
        </div>
        <!-- Banner End Here -->

        <!-- Services Start Here -->
        <div class="services" id="services">
            <div class="title">
                <h4>exclusive services</h4>
            </div>
            <div class="service fix">
                <div class="single-service">
                    <h4>service title</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.jpg" alt="Service 1">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae harum quidem labore architecto optio doloremque similique ab, mollitia distinctio eum.</p>
                    <a href="" class="btn">read more</a>
                </div>
                <div class="single-service">
                    <h4>service title</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.jpg" alt="Service 2">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae harum quidem labore architecto optio doloremque similique ab, mollitia distinctio eum.</p>
                    <a href="" class="btn">read more</a>
                </div>
                <div class="single-service">
                    <h4>service title</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.jpg" alt="Service 3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae harum quidem labore architecto optio doloremque similique ab, mollitia distinctio eum.</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
        </div>
        <!-- Services End Here -->
        <!-- Blog Start Here -->
        <div class="blogs">
            <div class="blog-left">
                <h4>latest blog</h4>
                <div class="blogs">
                    <div class="single-blog">
                        <h4><a href="">Blog Title</a></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2.jpg" alt="">
                        <div class="blog-meta">
                            <a href="">Admin</a><a href="">3 July</a><a href="">Food</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsa et vitae necessitatibus delectus nostrum? Sapiente quasi iste quibusdam facilis?</p>
                        <a href="">read more</a>
                    </div>    
                    <div class="single-blog">
                        <h4><a href="">Blog Title</a></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.jpg" alt="">
                        <div class="blog-meta">
                            <a href="">Admin</a><a href="">3 July</a><a href="">Food</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsa et vitae necessitatibus delectus nostrum? Sapiente quasi iste quibusdam facilis?</p>
                        <a href="">read more</a>
                    </div> 
                    <div class="single-blog">
                        <h4><a href="">Blog Title</a></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.jpg" alt="">
                        <div class="blog-meta">
                            <a href="">Admin</a><a href="">3 July</a><a href="">Food</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsa et vitae necessitatibus delectus nostrum? Sapiente quasi iste quibusdam facilis?</p>
                        <a href="">read more</a>
                    </div> 
                    <div class="single-blog">
                        <h4><a href="">Blog Title</a></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog4.jpg" alt="">
                        <div class="blog-meta">
                            <a href="">Admin</a><a href="">3 July</a><a href="">Food</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsa et vitae necessitatibus delectus nostrum? Sapiente quasi iste quibusdam facilis?</p>
                        <a href="">read more</a>
                    </div>                 
                </div>
            </div>
            <div class="blog-sidebar">
                <div class="single-sidebar">
                    <h4>Latest Posts</h4>
                    <ul>
                        <li><a href="">Post Title</a></li>
                        <li><a href="">Post Title</a></li>
                        <li><a href="">Post Title</a></li>
                        <li><a href="">Post Title</a></li>
                        <li><a href="">Post Title</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Blog End Here -->
        <!-- Footer Start Here -->
        <div class="footer">
            <p>&copy; 2021 All rights reserved.</p>
        </div>
        <!-- Footer End Here -->
    </div>
    <script src=" <?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src=" <?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src=" <?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>