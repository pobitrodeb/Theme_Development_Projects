<?php
/*
    Template Name: Template Repeater
*/
get_header(); 

?>

<?php
    $teams = get_field('team'); 
?>
    <?php 
            foreach($teams as $team){
                ?> 
                <div class="single-service">
                    <h4> <?php echo $team['team_name']; ?>  </h4>
                    <img src="<?php echo $team['team_image']['url']; ?>" alt="Service 1">
                    <p><?php echo $team['team_designation']; ?></p>
                  
                    <ul>
                    <?php
                        $team_social = $team['team_social_profile'];

                        foreach($team_social as $social){
                        ?>
                            
                            <li><a href="<?php echo $social ["social_url_"]['url'] ?>" class="btn" ><i class="<?php echo $social ["social_url_"]['title'] ?>"></i> </a></li>
                        
                        <?php 
                        } 
                    ?>
                    </ul>
                   <?php var_dump($social ["social_url_"]['url']); ?>
                </div>
                <?php
            }
    ?>