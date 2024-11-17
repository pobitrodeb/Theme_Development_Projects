
<?php get_header(); ?>
 
 <!-- blog side -->
 <section class="blog-side sp-seven blog-style-one standard-post sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                <div class="blog-details-content">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/news/1.jpg" alt=""></figure>
                    <div class="blog-content-one sp-three">
                        <div class="top-content centred">
                            <div class="meta-text"><?php the_category();?> </div>
                            <div class="title"><h3><?php the_title();?> </h3></div>
                            <div class="date"><span>On</span> <?php echo get_the_date(); ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span>
                            <?php echo the_author(); ?> </div>
                        </div>
                        
                        <?php echo the_content(); ?>
                        
                        <ul class="meta-list centred">
                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; <?php get_comments_number(); ?></a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 20</a></li>
                            <li><a href="post1.html"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING &nbsp; <i class="flaticon-substract"></i></a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                        </ul>
                    </div>
                    <div class="single-authore">
                        <div class="authore-img"><figure><img src="images/news/authore.jpg" alt=""></figure></div>
                        <div class="authore-title">JASSY BEULA - <span>Author</span></div>
                        <div class="text"><p>The days are all Happy and Free these days you wanna be where everybody knows your name fish do kitchen and beans do not burn on the grill took a whole lotta trying just to get up that wet floor.</p></div>
                        <ul class="social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="related-post centred">
                        <div class="title-text-two">RELATED POSTS</div>
                        <div class="carousel-style-four nav-style-none dots-style-one">
                            <div class="carousel-style-one">
                                <figure><img src="images/news/2.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h6><a href="post2.html">Love Boat soon will be making another run</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/3.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Lifestyle</a></div>
                                    <div class="title"><h6><a href="post2.html">Call him flipper flipper faster than lightning</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/4.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Fashion</a></div>
                                    <div class="title"><h6><a href="post2.html">East side to a deluxe apartment in the sky</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/2.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h6><a href="post2.html">Love Boat soon will be making another run</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/3.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Lifestyle</a></div>
                                    <div class="title"><h6><a href="post2.html">Call him flipper flipper faster than lightning</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/4.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Fashion</a></div>
                                    <div class="title"><h6><a href="post2.html">East side to a deluxe apartment in the sky</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/2.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h6><a href="post2.html">Love Boat soon will be making another run</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/3.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Lifestyle</a></div>
                                    <div class="title"><h6><a href="post2.html">Call him flipper flipper faster than lightning</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/4.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Fashion</a></div>
                                    <div class="title"><h6><a href="post2.html">East side to a deluxe apartment in the sky</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/2.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h6><a href="post2.html">Love Boat soon will be making another run</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/3.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Lifestyle</a></div>
                                    <div class="title"><h6><a href="post2.html">Call him flipper flipper faster than lightning</a></h6></div>
                                </div>
                            </div>
                            <div class="carousel-style-one">
                                <figure><img src="images/news/4.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="meta-text"><a href="#">Fashion</a></div>
                                    <div class="title"><h6><a href="post2.html">East side to a deluxe apartment in the sky</a></h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="title-text-two">4 COMMENTS</div>
                        <div class="single-comment">
                            <div class="img-box"><figure><img src="images/news/c1.jpg" alt=""></figure></div>
                            <div class="comment-title">ADAM GILGRIST</div>
                            <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                            <div class="comment-time">8 MINS AGO</div>
                            <div class="text">
                                <p>The days are all Happy and Free these days you wanna be where everybody knows your name fish do to no burn on the grill took a whole lotta trying just to get up that wet floor.</p>
                            </div>
                        </div>
                        <div class="single-comment replay">
                            <div class="img-box"><figure><img src="images/news/c2.jpg" alt=""></figure></div>
                            <div class="comment-title">MARIA WILLIAMS</div>
                            <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                            <div class="comment-time">2 MINS AGO</div>
                            <div class="text">
                                <p>The days are all Happy and Free these days you wanna be where everybody knows your as  on the grill took a whole lotta trying just to get up that wet floor.</p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="img-box"><figure><img src="images/news/c3.jpg" alt=""></figure></div>
                            <div class="comment-title">NIA JASS</div>
                            <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                            <div class="comment-time">5 MINS AGO</div>
                            <div class="text">
                                <p>The days are all Happy and Free these days you wanna be where everybody knows your name fish do to no burn on the grill took a whole lotta trying just to get up that wet floor.</p>
                            </div>
                        </div>
                        <div class="single-comment replay">
                            <div class="img-box"><figure><img src="images/news/c4.jpg" alt=""></figure></div>
                            <div class="comment-title">JASON ROY</div>
                            <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                            <div class="comment-time">1 WEEK AGO</div>
                            <div class="text">
                                <p>The days are all Happy and Free these days you wanna be where everybody knows your as  on the grill took a whole lotta trying just to get up that wet floor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <div class="title-text-two">WRITE YOUR COMMENTS</div>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Enter your comments here..." name="message" required=""></textarea>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="Name" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Email" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" value="" placeholder="Website" required="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn-one">POST COMMENT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                <div class="sidebar-content">
                    <div class="sidebar-about centred">
                        <div class="sidebar-title">ABOUT ME</div>
                        <figure class="img-box"><img src="images/home/1.png" alt=""></figure>
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
                            <div class="img-box"><a href="post1.html"><figure><img src="images/home/p1.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Fleeing from the Cylon tyre</a></h6>
                            <div class="text">JULY 09, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="images/home/p2.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Life support systems return</a></h6>
                            <div class="text">MAY 19, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="images/home/p3.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Eoner on a crusade</a></h6>
                            <div class="text">AUGUST 09, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="images/home/p4.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Aboard were expecting you</a></h6>
                            <div class="text">SEPTEMBER 10, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="images/home/p5.jpg" alt=""></figure></a></div>
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
                            <li><figure class="img-box"><a href="#"><img src="images/home/i1.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="images/home/i2.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="images/home/i3.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="images/home/i4.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="images/home/i5.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="images/home/i6.jpg" alt=""></a></figure></li>
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
                            <figure class="img-box"><img src="images/home/12.jpg" alt=""></figure>
                             <div class="inner-box">
                                <div class="content">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <figure class="img-box"><img src="images/home/13.jpg" alt=""></figure>
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
                <li><a href="#"><figure><img src="images/home/f1.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="images/home/f2.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="images/home/f3.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="images/home/f4.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="images/home/f5.jpg" alt=""></figure></a></li>
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
                        <a href="index.html"><figure><img src="images/footer/logo1.png" alt=""></figure></a>
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



<?php get_footer(); ?> 