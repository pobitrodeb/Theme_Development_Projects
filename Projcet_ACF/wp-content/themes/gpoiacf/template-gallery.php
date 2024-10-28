<?php
/*
    Template Name: Template Gallery
*/
get_header();
$gallerys = get_field('gallery');
?>

<div class="content">
    <?php
        foreach($gallerys as $gallery){
            ?> 
            <img src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>">
            <?php
        } 
    ?>
 
</div>