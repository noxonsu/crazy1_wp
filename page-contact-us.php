<?php

/*

Template Name: Contact Us

*/

?>

<?php 

get_header(); 

if(get_theme_mod('style_h')=="two") { 
    require_once("templates/contact-two.php");
} elseif(get_theme_mod('style_h')=="three") { 
   require_once("templates/contact-three.php");
} else {
	require_once("templates/contact-one.php");
}
 
require_once("footer.php"); 

?>