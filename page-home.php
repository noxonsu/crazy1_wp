<?php

/*

Template Name: Home

*/

?>

<?php 

get_header(); 
$home_h = 1;

if(get_theme_mod('style_h')=="two") { 
    require_once("templates/home-two.php");
} elseif(get_theme_mod('style_h')=="three") { 
   require_once("templates/home-three.php");
} else {
	require_once("templates/home-one.php");
}
 
require_once("footer.php"); 

?>