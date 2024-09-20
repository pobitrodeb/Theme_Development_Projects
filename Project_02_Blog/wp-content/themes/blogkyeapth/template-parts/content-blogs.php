<div class="blogs">
<?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?> 
           
                <div class="single-blog">
                    <h4><a href="<?php the_permalink(); ?>"> <?php the_title() ?>  </a></h4>
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title()?>"> 
                     <!-- <?php echo the_post_thumbnail(); ?>  -->
                    <div class="blog-meta">
                        <a href=""><?php the_author()?> </a><a href=""><?php the_date('M-Y'); ?></a><a href=""><?php the_category(); ?></a>
                    </div>
                    <p><?php the_excerpt(); ?> </p>
                    <a href="">read more</a>
                </div> 
                <?php    
        }
        wp_reset_postdata(); 
    }
?>                           
</div>