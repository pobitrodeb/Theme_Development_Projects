<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
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
            <div class="single-footer footer-logo">
               <h3>halim</h3>
               <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="single-footer">
               <h4>quick links</h4>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact Us</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer">
               <h4>latest post</h4>
               <ul>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4>Contact Us</h4>
               <ul>
                  <li><i class="fa fa-map-marker"></i> 245 Street, Sydney, Australia</li>
                  <li><i class="fa fa-mobile"></i>  +23 0034 5567 341</li>
                  <li><i class="fa fa-phone"></i>  +23 0034 5567 341</li>
                  <li><i class="fa fa-envelope"></i>  info@demo.com</li>
                  <li><i class="fa fa-globe"></i>  www.demo.com</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p>&copy; All Rights Reserved <?php echo date("Y"); ?> | Theme Development By Pobitro Deb </p>
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