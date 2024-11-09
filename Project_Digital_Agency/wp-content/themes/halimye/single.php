<?php get_header(); ?> 

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <!-- <img src="assets/img/blog/blog1.jpg" alt=""> -->
                 <?php the_post_thumbnail(); ?> 
                <?php the_content();?> 
                <div class="comments">
                    <h4>leave a reply</h4>
                    <form action="">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>

            
            <div class="col-xl-4">
                <?php
                    if(is_active_sidebar('sidebar-1')){
                        dynamic_sidebar('sidebar-1');
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 