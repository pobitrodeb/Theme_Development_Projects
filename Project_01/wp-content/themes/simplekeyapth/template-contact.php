<?php
    /* Template Name: Template Contact */ 
    get_header(); 
?>

        <!-- Page Banner Start Here -->
        <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/page-bannar.jpg');">
            <h2>contact us</h2>
        </div>
        <!-- Page Banner End Here -->
        
        <!-- Contact Start Here -->
        <div class="contact fix">
            <div class="contact-form">
                <h4>get in touch</h4>
                <form>
                    <input type="text" placeholder="Your Name">
                    <input type="text" placeholder="Your Subjct">
                    <input type="email" placeholder="Your Email">
                    <textarea placeholder="Your Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="contact-address">
                <h4>our address</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> <span>Address:</span>Sydney, Australia</li>
                    <li><i class="far fa-envelope"></i> <span>Email:</span> info@simple.com</li>
                    <li><i class="fas fa-phone-alt"></i> <span>Phone:</span> 11223344</li>
                    <li><i class="fas fa-globe-europe"></i> <span>Web:</span> www.simple.com</li>
                </ul>
            </div>
        </div>
        <!-- Contact End Here -->

        <!-- Map Start Here -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424146.10282421886!2d150.65178800037788!3d-33.84735668745214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sbd!4v1627334698161!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Map End Here -->

        <?php get_footer(); ?>