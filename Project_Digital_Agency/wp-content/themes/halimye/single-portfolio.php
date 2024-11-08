<?php get_header(); ?> 

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?> </h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li><?php the_title(); ?> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2>Portfolio Title</h2>
                <img src="<?php the_post_thumbnail_url();?>  ?>" alt="">
                <?php the_content(); ?> 
                <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                   </div>
                   <?php
                        if($project_gallerys = get_field('project_gallery')){
                            foreach ($project_gallerys as $gallery){
                                ?>
                                    <div class="col-xl-4">
                                        <div class="project-gallery">
                                            <img src="<?php echo $gallery['url']; ?>" alt="">
                                        </div>
                                    </div> 
                                <?php
                            }
                        }else {
                            ?>
                            <h5> ***** NO Project Gallery Added </h5>
                            <?php
                        }
                   ?>
                </div>
                <br><br>
                <div class="row">
                   <div class="col-xl-12">
                        <h4>project overview</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                    <ul>
                        <?php
                        if($project_techonology    = get_field('project_techonology')){
                            foreach ($project_techonology as $tech){
                                ?>
                                 <li><i class="fa fa-arrow-right"></i> <?php echo $tech['technology_name'];?></li>
                                <?php
                            } 
                             
                        }else {
                            ?>
                            <h5> ***** NO Project Techonology Added </h5>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                        <?php
                            if($project_features = get_field('project_features')){
                                foreach ($project_features as $features){
                                    ?>
                                    <li><i class="fa fa-arrow-right"></i> <?php echo $features['feature_name'];?></li>
                                    <?php
                                }
                            }else {
                                ?>
                                <h5> ***** NO Project Features Added </h5>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?> 