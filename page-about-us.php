<?php

/*

Template Name: About Us

*/

?>

<?php 

get_header(); 
    
if(get_theme_mod('style_h')=="two") { 
    require_once("templates/about-two.php");
} elseif(get_theme_mod('style_h')=="three") { 
   require_once("templates/about-three.php");
} else {
    require_once("templates/about-one.php");
}
 
require_once("footer.php"); 

?>