
    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans </h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0">

            <?php
                    if(class_exists('ACF')){
                        $args = array(
                            'post_type'             => 'prices', 
                            'posts_per_page'        => 3, 
                        ); 
                        $query      = new WP_Query($args); 
                        $i = 0;
                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                $plan_short_tag_line = get_field('plan_short_tag_line');
                                $currency_icon = get_field('currency_icon');
                                $price_amount = get_field('price_amount');
                                $price_type = get_field('price_type');
                                $price_button_title_ = get_field('price_button_title_');
                                $price_button_url = get_field('price_button_url');
                                $i++; 
                                ?>
                                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                                        <div class="<?php if(($i % 2) == 0 ){ echo "bg-white rounded shadow position-relative"; }else { echo "bg-light rounded"; } ?>">
                                            <div class="border-bottom py-4 px-5 mb-4">
                                                <h4 class="text-primary mb-1"><?php the_title(); ?></h4>
                                                <small class="text-uppercase"><?php echo $plan_short_tag_line; ?></small>
                                            </div>
                                            <div class="p-5 pt-0">
                                                <h1 class="display-5 mb-3">
                                                    <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $currency_icon; ?></small><?php echo $price_amount; ?><small
                                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ <?php echo $price_type; ?></small>
                                                </h1>
                                                <?php 
                                                    $price_features = get_field('price_features');
                                                    foreach($price_features as $features){
                                                        ?> 
                                                         <div class="d-flex justify-content-between mb-3"><span><?php echo $features['features_title']; ?></span><i class="<?php if($features['price_features_active'] == 'show'){
                                                            echo 'fa fa-check text-primary'; } else{ echo "fa fa-times text-danger";} ?> pt-1"></i></div>
                                                        <?php
                                                    }
                                                ?>
                                                <a href="<?php echo $price_button_url; ?>" class="btn btn-primary py-2 px-4 mt-4"><?php echo $price_button_title_;?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                    }
            ?>


                        <!-- 2nd   -->
                <!-- <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Standard Plan</h4>
                            <small class="text-uppercase">For Medium Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div> -->
                        <!-- 2nd end  -->

                <!-- 3rd   -->
                <!-- <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For Large Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div> -->
                <!-- 3rd   -->

            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
