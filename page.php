<?php get_header();

if(get_theme_mod('style_h')=="two") { 
    require_once("templates/page-two.php");
} elseif(get_theme_mod('style_h')=="three") { 
   require_once("templates/page-three.php");
} else {
    require_once("templates/page-one.php");
}

get_footer(); ?>