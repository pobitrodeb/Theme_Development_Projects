<?php get_header();  ?> 
            <!-- Page Banner Start Here -->
            <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/page-bannar.jpg');">
            <h2><?php the_title(); ?></h2>
        </div>
        <!-- Page Banner End Here -->
        
        <!-- About Start Here -->
        <div class="about fix">
            <div class="about-left">
                <?php the_content(); ?> 
            </div>
            <div class="about-menu">
                <?php 
                    dynamic_sidebar('sidebar-1');
                ?>
                
            </div>
        </div>
        <!-- About End Here -->
<?php get_footer();  ?> 
