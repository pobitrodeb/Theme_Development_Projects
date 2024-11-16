<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?> 
</head>

<!-- page wrapper -->
<body class="boxed_wrapper" <?php body_class(); ?> >


    <!-- .preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- /.preloader -->


    <!-- menu-area -->
    <header class="main-header header-style-four">
        
        <!-- header-top-style-two -->
        <div class="header-top-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="social-style-four in-block">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="logo-box centred">
                            <a href="index.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/logo/logo1.png" alt=""></figure></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="search-box">
                            <form action="index.html" method="post">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-top-style-two -->


        <!-- main-menu -->
        <div class="theme_menu menu-area stricky centred">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu">
                                <div class="navbar-header">     
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="#">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="single.html">Single Post</a></li>
                                                <li><a href="category.html">Category Page</a></li>
                                                <li><a href="author.html">Author Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>


                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Homepage Larg Grid</a></li>
                                                <li><a href="index2.html">Homepage Grid</a></li>
                                                <li><a href="index3.html">Homepage List</a></li>
                                                <li><a href="index4.html">Homepage Masonry</a></li>
                                                <li><a href="index5.html">Homepage Classic</a></li>
                                                <li><a href="index6.html">Homepage Zigzag</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="dropdown"><a href="#">Features</a>
                                            <ul>
                                                <li><a href="post1.html">Standard Post</a></li>
                                                <li><a href="post2.html">Slider Post</a></li>
                                                <li><a href="post3.html">Gallery Post</a></li>
                                                <li><a href="video-post.html">Video Post</a></li>
                                                <li><a href="audio-post.html">Audio Post</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Single Shop</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="travel.html">Travel</a></li>
                                        <li><a href="lifestyle.html">Lifestyle</a></li>
                                        <li><a href="music.html">Music</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
           </div>
        </div><!-- end main-menu -->
    </header>
    <!-- end menu-area -->


    <section class="slider-style-six">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 first-column">
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php echo get_template_directory_uri()?>/images/home6/slider1.jpg" alt="">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><a href="#">Fashion</a></div>
                                            <div class="title"><h3><a href="post3.html"> Never heard the word impossible</a></h3></div>
                                            <div class="date"><span>On</span> JANUARY 27, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 column">
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php echo get_template_directory_uri()?>/images/home6/slider2.jpg" alt="">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><a href="#">TRAVEL</a></div>
                                            <div class="title"><h3><a href="post3.html">Star the professor and mary</a></h3></div>
                                            <div class="date"><span>On</span> February 10, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                    <div class="single-item-overlay">
                        <div class="img-box">
                            <img src="<?php echo get_template_directory_uri()?>/images/home6/slider3.jpg" alt="">
                            <div class="overlay">
                                <div class="inner-box">
                                    <div class="content blog-content-one">
                                        <div class="meta-text"><a href="#">MUSIC</a></div>
                                        <div class="title"><h3><a href="post3.html">Dangerous world of a man</a></h3></div>
                                        <div class="date"><span>On</span> March 27, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>


    <!-- carousel-style-one -->
    <section class="carousel-style-one mar-bottom-100">
        <div class="single-item-carousel-overlay owl-control-none">
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/home4/1.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h6><a href="post2.html">Love Boat soon will be making<br /> another run</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/home4/2.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">BEAUTY</a></div>
                                    <div class="title"><h6><a href="post2.html">The professor and Mary Ann here<br /> on Gilligans</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/home4/3.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Lifestyle</a></div>
                                    <div class="title"><h6><a href="post2.html">Call him flipper flipper faster<br /> than lightning</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/home4/4.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Music</a></div>
                                    <div class="title"><h6><a href="post2.html">A maximum security stockade to<br /> Los Angeles</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/home4/5.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Fashion</a></div>
                                    <div class="title"><h6><a href="post2.html">East side to a deluxe apartment<br /> in the sky</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carousel-style-one end -->


    <!-- blog side -->
    <section class="blog-side blog-style-one blog-style-three">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/6.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Flying away on a wing</a></h4></div>
                                            <div class="date"><span>On</span>  JANUARY 27, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/8.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Tropic port aboard this tiny</a></h4></div>
                                            <div class="date"><span>On</span>  JANUARY 30, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/10.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">TRAVEL</a></div>
                                            <div class="title"><h4><a href="post1.html">Finally got a piece of the pie</a></h4></div>
                                            <div class="date"><span>On</span>  February 10, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="single-item sp-six">
                                        <div class="single-item-overlay">
                                            <div class="img-box">
                                                <img src="<?php echo get_template_directory_uri()?>/images/home4/12.jpg" alt="">
                                                <div class="overlay">
                                                    <div class="inner-box">
                                                        <div class="content blog-content-one">
                                                            <div class="meta-text"><a href="#">Fashion</a></div>
                                                            <div class="title"><h4><a href="post1.html">Mister we could use a man</a></h4></div>
                                                            <div class="date"><span>On</span> February 28, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/14.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Broomstick you can crawl on</a></h4></div>
                                            <div class="date"><span>On</span>  March 07, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/7.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">The kitchen and beans</a></h4></div>
                                            <div class="date"><span>On</span>  April 15, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/9.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Mister we could use a man</a></h4></div>
                                            <div class="date"><span>On</span>  May 27, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/11.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Moving on up to the east side</a></h4></div>
                                            <div class="date"><span>On</span>  June 21, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/13.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Ship set ground on the shore</a></h4></div>
                                            <div class="date"><span>On</span>  July 17, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri()?>/images/home4/15.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Minnow would be lost</a></h4></div>
                                            <div class="date"><span>On</span>  August 15, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-pagination page-pagination centred">
                            <li><a href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                    <div class="sidebar-content">
                        <div class="sidebar-about centred">
                            <div class="sidebar-title">ABOUT ME</div>
                            <figure class="img-box"><img src="<?php echo get_template_directory_uri()?>/images/home/1.png" alt=""></figure>
                            <h5 class="name">Jassy Beula</h5>
                            <div class="text"><p>These days are all share them with me oh baby just sit right back and you will hear a tale a tale of a fateful trip that started.</p></div>
                            <ul class="social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-post">
                            <div class="sidebar-title">RECENT POST</div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/p1.jpg" alt=""></figure></a></div>
                                <h6><a href="post1.html">Fleeing from the Cylon tyre</a></h6>
                                <div class="text">JULY 09, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/p2.jpg" alt=""></figure></a></div>
                                <h6><a href="post1.html">Life support systems return</a></h6>
                                <div class="text">MAY 19, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/p3.jpg" alt=""></figure></a></div>
                                <h6><a href="post1.html">Eoner on a crusade</a></h6>
                                <div class="text">AUGUST 09, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/p4.jpg" alt=""></figure></a></div>
                                <h6><a href="post1.html">Aboard were expecting you</a></h6>
                                <div class="text">SEPTEMBER 10, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/p5.jpg" alt=""></figure></a></div>
                                <h6><a href="post1.html">Our dreams come true</a></h6>
                                <div class="text">OCTOBER 09, 2018</div>
                            </div>
                        </div>
                        <div class="sidebar-newsletter centred">
                            <div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;NEWSLETTER</div>
                            <div class="text">These days are all share them wit me</div>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button type="submit" class="btn-one">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-instagram">
                            <div class="sidebar-title">INSTAGRAM</div>
                            <ul class="img-list clearfix"> 
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri()?>/images/home/i1.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri()?>/images/home/i2.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri()?>/images/home/i3.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri()?>/images/home/i4.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri()?>/images/home/i5.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri()?>/images/home/i6.jpg" alt=""></a></figure></li>
                            </ul>
                        </div>
                        <div class="sidebar-categories">
                            <div class="sidebar-title">CATEGORIES</div>
                            <ul class="categories-list"> 
                                <li><a href="#">Beauty<span>(3)</span></a></li>
                                <li><a href="#">Dressing<span>(8)</span></a></li>
                                <li><a href="#">Fitness <span>(7)</span></a></li>
                                <li><a href="#">Lifestyle<span>(6)</span></a></li>
                                <li><a href="#">Travel<span>(9)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-img-content">
                            <div class="single-item">
                                <figure class="img-box"><img src="<?php echo get_template_directory_uri()?>/images/home/12.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <figure class="img-box"><img src="<?php echo get_template_directory_uri()?>/images/home/13.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">MUSIC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog side end -->


    <!-- instagram-section -->
    <section class="instagram-section centred">
        <div class="container">
            <div class="instagram-title">FOLLOW @ INSTAGRAM</div>
            <ul class="instagram-img-list clearfix">
                <li><a href="#"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/f1.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/f2.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/f3.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/f4.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo get_template_directory_uri()?>/images/home/f5.jpg" alt=""></figure></a></li>
            </ul>
        </div>
    </section>
    <!-- instagram-section -->

    
    <footer class="footer-style-six sp-one">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="copyright">CopyrightS © 2021 <a href="#">BELFAST</a>. All rights reserved</div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-logo">
                        <a href="index.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/footer/logo1.png" alt=""></figure></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <ul class="social-style-seven pull-right in-block">
                        <li><a href="#"><i class="fa fa-facebook"></i>&nbsp;&nbsp;FACEBOOK</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>&nbsp;&nbsp;TWITTER</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i>&nbsp;&nbsp;LINKEDIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>

<?php wp_footer();?> 
</body><!-- End of .page_wrapper -->
</html>
