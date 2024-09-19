
        <?php get_header(); ?> 

       <?php get_template_part('template-parts/content', 'banner'); ?> 
       
       <?php get_template_part('template-parts/content', 'services'); ?> 

        <!-- Blog Start Here -->
        <div class="blogs">
            <div class="blog-left">
                <h4>latest blog</h4>
                <?php get_template_part('template-parts/content', 'blogs'); ?> 
            </div>
          <?php get_sidebar(); ?> 
        </div>
        <!-- Blog End Here -->
<?php get_footer(); ?> 