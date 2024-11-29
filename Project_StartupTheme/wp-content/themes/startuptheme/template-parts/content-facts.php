
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <?php
                    if(class_exists('ACF')){
                        $counters = get_field('counters', 'options'); 
                        $i = 0; 
                        foreach($counters as $counter){
                            $i++; 
                            ?>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                                    <?php
                                        if(($i % 2 ) == 0) { }
                                    ?>
                                    <div class="<?php if(($i % 2) == 0 ){ echo "bg-light"; }else { echo "bg-primary"; } ?> shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                        <div class="<?php if(($i % 2) == 0 ){ echo "bg-primary"; }else { echo "bg-white"; } ?> bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                            <i class="fa <?php echo $counter['counter_icon']; ?> text-primary"></i>
                                        </div>
                                        <div class="ps-4">
                                            <h5 class="<?php if(($i % 2) == 0 ){ echo "text-primary"; }else { echo "text-white"; } ?>  mb-0"><?php echo $counter['counter_title'];?></h5>
                                            <h1 class="<?php if(($i % 2) == 0 ){ echo "text-primary"; }else { echo "text-white"; } ?> mb-0" data-toggle="counter-up"><?php echo $counter['counter_number'];?></h1>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>

            </div>
        </div>
    </div>
    <!-- Facts Start -->

    