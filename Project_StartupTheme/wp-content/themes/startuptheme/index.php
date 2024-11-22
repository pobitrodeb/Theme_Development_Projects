<?php get_header(); ?> 

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $args = array(
                        'post_type'             => 'sliders', 
                        'posts_per_page'        => 3, 
                    );
                    $query = new WP_Query($args); 
                    $i = 0; 
                    if($query->have_posts()){
                        while($query->have_posts()){
                            $query->the_post();
                            $i++; 
                            $sub_heading =  get_field('sub_heading');
                            $slider_button_title_1 = get_field('slider_button_title_1');
                            $slider_button_title_2 = get_field('slider_button_title_2');
                            $slider_button_title_2 = get_field('slider_button_title_2');
                            $slider_button_1_url = get_field('slider_button_1_url');
                            $slider_button_2_url_ = get_field('slider_button_2_url_');
                            ?>
                                <div class="carousel-item <?php if($i == 1 ){ echo 'active';} ?>">
                                    <img class="w-100" src="<?php the_post_thumbnail_url();?>" alt="Image">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 900px;">
                                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo $sub_heading; ?></h5>
                                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php echo the_title(); ?></h1>
                                            <a href="<?php echo  $slider_button_1_url; ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $slider_button_title_1; ?></a>
                                            <a href="<?php echo  $slider_button_2_url_; ?>" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $slider_button_title_2; ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
              
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <?php get_template_part('template-parts/content', 'facts');?>

    <?php get_template_part('template-parts/content', 'about');?>

    <?php get_template_part('template-parts/content', 'features');?>

    <?php get_template_part('template-parts/content', 'services');?>

    <?php get_template_part('template-parts/content', 'pricing');?>

    <?php get_template_part('template-parts/content', 'quote');?>

    <?php get_template_part('template-parts/content', 'testimonial');?>

    <?php get_template_part('template-parts/content', 'team');?>

    <?php get_template_part('template-parts/content', 'blog');?>

<?php get_footer();?> 