
<?php 

/**
 * Theme Essential Support
 */
function xenon_essential_support(){

    /* Load text domain */
    load_theme_textdomain('xenon'); 

    /* Dynamic title tag */
    add_theme_support('title-tag'); 

    /* Post thumbanils supporrt */
    add_theme_support('post-thumbanils'); 
}
add_action('after_setup_theme', 'xenon_essential_support');

