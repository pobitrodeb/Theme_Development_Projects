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

    $category = get_field('category');
    $tags     = get_field('tags'); 
    $colors   = get_field('color');
    $vote    = get_field('vote');
    $trueFalse = get_field('true_false_');
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

           <h1> This is ACF Select Field </h1>
            
           <h4> This category is: <?php echo $category["label"]; ?></h4>

           <h1> This is ACF Multiple Select Field </h1>
           <?php
               foreach($tags as $tag){
                echo $tag['label'];
               }
           ?>

            <h1> This is ACF Checkbox Field </h1>
            <?php
                foreach ($colors as $color){
                    ?>
                    <ul><?php echo $color['label'];  ?></ul>
                    <?php
                }
            ?>
             
           <h1> This is ACF Radio Field </h1>
           <p> Vote Result : <?php echo $vote; ?> </p>

                        
           <h1> This is True/False Field </h1>
                <?php 
                    if($trueFalse){
                        echo "Result is okay"; 
                    }
                ?>
       
        </div>
