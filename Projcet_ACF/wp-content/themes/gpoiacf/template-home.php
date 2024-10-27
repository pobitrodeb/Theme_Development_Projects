<?php
/*
    Template Name: Template Home
*/
    get_header();
    $title = get_field('title');
?>
        <div class="content">
            <h1>
                <?php 
                      if($title){
                        echo $title; 
                      }
                ?>
            </h1>
        </div>
