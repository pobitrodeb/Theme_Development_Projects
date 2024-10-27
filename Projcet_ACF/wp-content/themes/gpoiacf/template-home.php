<?php
/*
    Template Name: Template Home
*/
    get_header();
    $title = get_field('title');
    $description = get_field('description'); 
    $price       = get_field('price'); 
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
        </div>
