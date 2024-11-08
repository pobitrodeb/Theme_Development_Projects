<?php

/*
    Template Name: Gallery Page 
*/

    get_header(); 
?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_URL(); ?>"></a>Home</li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
        <?php 
               $args   = array (
                        'post_type'             => 'gallerys', 
                        'posts_per_page'        => 9
                ); 
                $quuery = new WP_Query($args); 
                while($quuery->have_posts()){
                    $quuery->the_post();
                    ?>
                    
                    <div class="col-xl-4">
                        <div class="single-gallery">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-content">
                                <h3><a href="<?php echo the_field('view_image_');?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
        ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>