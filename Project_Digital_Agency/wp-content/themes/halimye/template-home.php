<?php
/*
    Template Name: Home Page 
*/
   get_header(); 
 
?> 
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">
            <?php 
                  $args = array(
                     'post_type'             => 'sliders', 
                     'post_per_page'         => 3
                  ); 
                  $query = new WP_Query($args); 
                  while($query -> have_posts()){
                     $query -> the_post();
                     
                     $slide_subtitle = get_post_meta(get_the_ID(), 'slide_subtitle', 'true'); 
                     $slide_btn_text = get_post_meta(get_the_ID(), 'slide_btn_text', 'true'); 
                     $slide_btn_link = get_post_meta(get_the_ID(), 'slide_btn_link', 'true'); 
                  ?>
               <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                             <?php
                                 if($slide_subtitle){
                                    ?> 
                                     <h4><?php echo $slide_subtitle ?></h4>
                                    <?php
                                 } 
                             ?>
                              <h2><?php the_title(); ?></h2>
                              <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital design & web development services.</p>
                              <!-- /*<?php the_content(); ?>*/ -->
                             <?php
                             if($slide_btn_text)
                             {
                              ?>
                               <a href="<?php echo $slide_btn_link ?> " class="box-btn"><?php echo $slide_btn_text ?> <i class="fa fa-angle-double-right"></i></a>
                              <?php
                             } 
                             ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
            <?php
               }
            ?>
         </div>
      </section>
      <!-- Slider Area Start -->


      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <?php 
                     $about_section                            = get_field('about_section', 'option'); 
                  ?>
                  <h3><span><?php echo $about_section['about_section_sub_heading']; ?></span> <?php echo $about_section['about_section_heading']; ?></h3>
               </div>
               <div class="col-md-6">
                   <?php echo $about_section['about_section_description']; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <?php 
                        $about_content = get_field('about_content', 'option'); 
                     ?> 

                     <div class="page-title">
                        <h4><?php echo $about_content['title']; ?> </h4>
                     </div>
                    <?php echo $about_content['description'];?> </br> </br>
                     <a href="<?php echo $about_content['btn_url']; ?> " class="box-btn"><?php echo $about_content['btn_text']; ?> <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>

               <div class="col-md-5">
                  <?php 
                     if(class_exists('ACF')){
                         $about_features = get_field('about_features', 'option'); 
                         foreach ($about_features as $about_feature){
                           ?>
                              <div class="single_about">
                                 <i class="fa <?php echo $about_feature['icon'] ;?>"></i>
                                 <h4> <?php echo $about_feature['title']; ?> </h4>
                                 <?php echo $about_feature['description']; ?> 
                              </div>
                           <?php
                         } //foreach loop close 
                         wp_reset_postdata();
                     } //if Close 
                  ?>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->



      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        
                        <h4>faq</h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php
                           if(class_exists('ACF')){
                              $faqs = get_field('faq', 'option'); 
                              $i    = 0; 
                              foreach($faqs as $faq){
                                 $i++;
                                 ?>
                                 
                                 <div class="card">
                                    <div class="card-header" id="heading<?php echo $i ?>">
                                       <h5 class="mb-0">
                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                                       <?php echo $faq['faq_title']; ?>
                                          </button>
                                       </h5>
                                    </div>
                                    <div id="collapse<?php echo $i ?>" class="collapse <?php if($i == 1 ){echo 'show';} ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                                       <div class="card-body">
                                          <?php echo $faq['faq_description']; ?>
                                       </div>
                                    </div>
                                 </div>
   
                                 <?php
                              }
                              wp_reset_postdata();
                           } //if close 
                          
                        ?> 
                      
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4>our skills</h4>
                     </div>
                        <?php
                           if(class_exists('ACF')){
                              $skills = get_field('skills', 'option');
                              foreach ($skills as $skill){
                                 ?>
                                  <div class="single-skill">
                                        <h4><?php echo $skill['skill_title']; ?></h4>
                                       <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['skill_percentage_']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill['skill_percentage_']; ?></div>
                                 </div>
                                  <?php
                              }
                              wp_reset_postdata(); 
                           } // if close 
                          
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->


      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> our services</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">
               <?php
                  if(class_exists('ACF')){
                     $args = array(
                        'post_type'    => 'services', 
                        'posts_per_page' => 6,
                     );
                     $query   = new WP_Query($args); 
                     while($query -> have_posts()){
                        $query -> the_post(); 
                     ?> 
                  
                     <div class="col-lg-4 col-md-6">
                        <!-- Single Service -->
                        <div class="single-service">
                           <i class="<?php the_field('services_icon');?>"></i>
                           <h4><?php the_title() ?> </h4>
                           <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p> -->
                           <?php the_content(); ?> 
                        </div>
                     </div>
                     <?php
                     }
                  } //if close 
               ?>
            </div>
         </div>
      </section>
      <!-- Services Area End -->
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">
               <?php
                  if(class_exists('ACF')){
                     $args = array (
                        'post_type'                => 'conuters', 
                        'posts_per_page'           => 4
                     ); 
   
                     $query = new WP_Query($args); 
                     while ($query -> have_posts()){
                        $query->the_post(); 
                     ?> 
                     <div class="col-md-3">
                        <div class="single-counter">
                           <h4><i class="<?php the_field('counter_icon') ?>"></i><span class="counter">
                              <?php the_title(); ?>
                           </span><?php the_content(); ?></span></h4>
                        </div>
                     </div>
                     <?php
                     }
                     wp_reset_postdata(); 
                  }
               ?>
               
            </div>
         </div>
      </section>
      <!-- Counter Area End -->
       
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> creative team</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">
            <?php 
               if(class_exists('ACF')){
                  $args          = array(
                     'post_type'          => 'teams', 
                     'posts_per_page'     => 3   
                  ); 
                  $query = new WP_Query($args); 
                  while($query -> have_posts()){
                  $query -> the_post(); 
                  ?>
                  <div class="col-md-4">
                     <div class="single-team">
                        <?php the_post_thumbnail(); ?> 
                        <div class="team-hover">
                           <div class="team-content">
                              <h4> <?php the_title(); ?> <span> <?php the_field('member_designation_'); ?> </span></h4>
                            
                              <ul>
                              <?php
                                    $social_profile = get_field('social_profile'); 
   
                                    foreach($social_profile as $profile){
                                       ?>
                                       
                                          <li><a href="<?php echo $profile['social_url']['url']?>"><i class="<?php echo $profile['social_url']['title']?>"></i></a></li>
                                       
                                       <?php
                                    }
                              ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php
               }
               wp_reset_postdata();
               }//if close 
            ?>
            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> what client say</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">
                     <?php 
                       if(class_exists('ACF')){

                        $args = array(
                           'post_type'                => 'testimonials', 
                           'posts_per_page'           => 3
                        );
                        $query = new WP_Query($args); 
                        while ($query -> have_posts()){
                           $query -> the_post();
                           ?> 
                           <div class="single-testimonial">
                                 <div class="testi-img">
                                    <!-- <img src="<?php echo get_template_directory_uri() ;?>/assets/img/testimonials/03.png" alt="" /> -->
                                     <?php the_post_thumbnail() ?>
                                 </div>
                                 <?php the_content(); ?>
                                 <h4> <?php the_title(); ?> <span> <?php the_field('designation'); ?> </span></h4>
                           </div>
                           <?php
                        }
                        wp_reset_postdata(); 


                       }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->

      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> latest news</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">
               <?php
                     if(class_exists('ACF')){
                        $args = array(
                           'post_type'             => 'post', 
                           'posts_per_page'        => 3
                        ); 
                     $query  = new WP_Query($args); 
                     while($query -> have_posts()){
                        $query -> the_post(); 
                     ?> 
                        <div class="col-md-4">
                           <div class="single-blog">
                              <!-- <img src="<?php echo get_template_directory_uri() ;?>/assets/img/blog/blog1.jpg" alt="" /> -->
                               <?php the_post_thumbnail() ?> 
                              <div class="post-content">
                                 <div class="post-title">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                 </div>
                                 <div class="pots-meta">
                                    <ul>
                                       <li><a href="#">25 oct 2018</a></li>
                                       <li><a href="#"><?php the_author(); ?></a></li>
                                    </ul>
                                 </div>
                                 <?php the_excerpt();?>
                                 <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                              </div>
                           </div>
                        </div>
   
                     <?php
                     }
                     wp_reset_postdata(); 
                     }//if close 
               ?>

            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
      
 <?php get_footer(); ?> 