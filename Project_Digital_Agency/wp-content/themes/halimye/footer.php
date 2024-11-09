<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4> <?php the_field('cta_title', 'option') ?> <span> <?php the_field('cta_description', 'option') ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href=" <?php the_field('cta_button_url', 'option') ?>" class="box-btn"> <?php the_field('cta_button_', 'option') ?><i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <?php
                  if(is_active_sidebar('footer-1')){
                     dynamic_sidebar('footer-1');
                  }
            ?>
          
         </div>
         <div class="col-lg-2 col-md-6">
            <?php
               if(is_active_sidebar('footer-2')){
                  dynamic_sidebar('footer-2');
               }
            ?>
         </div>
         <div class="col-lg-4 col-md-6">
            <?php
            if(is_active_sidebar('footer-3')){
               dynamic_sidebar('footer-3');
            }
            ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4>Contact Us</h4>
               <ul>
                  <?php
                     $contact_footer_infromations  = get_field('contact_footer_infromation', 'option'); 

                     foreach ($contact_footer_infromations as $info ){
                        ?> 
                          <li><i class="fa <?php echo $info['contact_footer_icon']; ?>"></i> <?php echo $info['contact_footer_text']; ?> </li>
                        <?php
                     }
                     wp_reset_postdata();
                  ?>
               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p> <?php the_field('footer_copyright_text', 'option'); ?> <?php echo date("Y"); ?> | Theme Development By Pobitro Deb </p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
            <?php 
               $socials = get_field('header_social', 'option'); 
                  foreach ($socials as $social){
                  ?>
                     <li>
                        <a href="<?php echo $social['link']; ?>"><i class="fa <?php echo $social['icon']; ?>"></i></a>
                     </li>
                  <?php
                  }
                  wp_reset_postdata(); 
               ?>
            </ul>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer(); ?> 
</body>
</html>