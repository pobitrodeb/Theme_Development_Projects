<?php
/*
    Template Name: Template Home
*/
    get_header();
    $title = get_field('title');
    $description = get_field('description'); 
    $price       = get_field('price'); 
    $rang_select = get_field('rang_select');
    
    $image      = get_field('upload_photo');  
    $ulr        = $image['url']; 
    $alt        = $image['alt']; 
?>
        <div class="content">
            <h1>
                <?php 
                      if($title){
                        echo $title; 
                      }
                ?>
            </h1>
            <p>
                <?php
                    if($description){ 
                        echo $description; 
                    }
                ?>
            </p>
            <p>
                <?php 
                    if($price){
                        echo $price; 
                    }
                ?>
            </p>
            <?php echo $rang_select; ?> 

           <p>
            <?php 
                    $email = get_field('email');
                    if($email){
                        echo $email; 
                    }  
                ?>
           </p>
           <hr>
            <h2> This Data get form Text Editor Content </h2>
           <p>
                <?php
                    $content = get_field('write_content_'); 

                    if($content){
                        echo $content; 
                    }
                ?>
           </p>

            <h1> This is ACF Image Field </h1>
           <?php
                if($image){
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">
                <?php
                    }
                ?>
           ?>
           
        </div>
