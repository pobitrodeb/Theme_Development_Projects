	  
	  <!-- About Area Start -->
	  <section class="about-area pt-100 pb-100" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="about-img">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/me.jpg" alt="" /> -->
						<?php
							$about_image_url = get_theme_mod('about_photo_image'); 
							
							if($about_image_url){
								echo '<img src="' . esc_url($about_image_url) . '" alt="About Banner" />';
							}
							
						?>
					</div>
				</div>
				<div class="col-md-8">
					<div class="about-desc">
						<h3> <?php echo get_theme_mod('about_section_title') ?> </h3>
						<h4><?php echo get_theme_mod('about_sub_title') ?> </h4>
						<p><?php echo get_theme_mod('about_details') ?></p>
						<ul>
							<li><i class="fa fa-angle-double-right"></i> bootstrap development</li>
							<li><i class="fa fa-angle-double-right"></i> email marketing</li>
						</ul>
						<ul>
							<li><i class="fa fa-angle-double-right"></i> logo designing</li>
							<li><i class="fa fa-angle-double-right"></i> software management</li>
						</ul>
						<a href="" class="box-btn">hire me</a>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- About Area End -->