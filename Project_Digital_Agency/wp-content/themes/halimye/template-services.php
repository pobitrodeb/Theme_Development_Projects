<?php
/*
    Template Name: Services Page 
*/
    get_header(); 
?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li>Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

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

               ?>
            </div>
         </div>
      </section>
      <!-- Services Area End -->
      <?php get_footer(); ?>