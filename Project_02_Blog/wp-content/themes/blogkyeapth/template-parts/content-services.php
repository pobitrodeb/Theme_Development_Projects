 <!-- Services Start Here -->
 <div class="services" id="services">
            <div class="title">
                <h4 style="background-color: <?php global $redux_demo;  echo $redux_demo['opt-background']; ?>; "> 
                    <?php
                    global $redux_demo; 
                        echo $redux_demo['opt-text'];  
                    ?>
                 </h4>
                 <p>
                    <?php echo $redux_demo['opt-content']; 
                    ?>
                 </p>
            </div>
            <div class="service fix">
                <div class="single-service">
                    <h4>service title</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.jpg" alt="Service 1">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae harum quidem labore architecto optio doloremque similique ab, mollitia distinctio eum.</p>
                    <a href="" class="btn">read more</a>
                </div>
                <div class="single-service">
                    <h4>service title</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.jpg" alt="Service 2">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae harum quidem labore architecto optio doloremque similique ab, mollitia distinctio eum.</p>
                    <a href="" class="btn">read more</a>
                </div>
                <div class="single-service">
                    <h4>service title</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.jpg" alt="Service 3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae harum quidem labore architecto optio doloremque similique ab, mollitia distinctio eum.</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
        </div>
        <!-- Services End Here -->