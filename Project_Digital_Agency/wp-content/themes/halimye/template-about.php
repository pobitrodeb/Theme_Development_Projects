<?php
/*
    Template Name: About Page 
*/
    get_header(); 
?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>"></a>Home</li> / 
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <?php 
                     $about_section  = get_field('about_section', 'option'); 
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
                        if(class_exists('ACF')){
                           $about_content = get_field('about_content', 'option'); 
                        }
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
                     foreach($about_features as $about_feature){
                        ?>
                        <div class="single_about">
                           <i class="fa <?php echo $about_feature['icon'] ;?>"></i>
                           <h4> <?php echo $about_feature['title']; ?> </h4>
                            <?php echo $about_feature['description']; ?> 
                          
                        </div>
                        <?php
                     }
                     wp_reset_postdata(); 
                  }
               ?>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->



<?php get_footer(); ?>