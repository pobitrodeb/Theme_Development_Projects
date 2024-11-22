
    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <?php
                    if(class_exists('ACF')){
                        $args = array (
                            'post_type'         => 'team', 
                            'posts_per_page'    => 3, 
                        ); 
                        $query = new WP_Query($args);
                        if($query->have_posts()){
                          while($query->have_posts()){
                            $query->the_post();
                            $team_designation = get_field('team_designation'); 
                            $team_photo = get_field('team_photo'); 
                            
                            ?>
                               <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-light rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <img class="img-fluid w-100" src="<?php echo $team_photo; ?>" alt="">
                                            <div class="team-social">
                                                <?php
                                                        $team_social_profiles = get_field('team_social_profiles');
                                                        if($team_social_profiles){
                                                            foreach($team_social_profiles as $profile){
                                                                ?>
                                                                  <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?php echo $profile['team_social_url']; ?>"><i class="<?php echo $profile['team_social_icon']; ?> fw-normal"></i></a>
                                                                <?php
                                                                }
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="text-center py-4">
                                            <h4 class="text-primary"><?php echo the_title();?></h4>
                                            <p class="text-uppercase m-0"><?php echo $team_designation; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                          }
                          wp_reset_postdata();
                        } 
                    }
                ?>

            </div>
        </div>
    </div>
    <!-- Team End -->
