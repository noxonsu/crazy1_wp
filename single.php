<?php 

if(get_theme_mod('style_h')=="two") { 
	if( has_post_format( 'gallery' ) ){ 
	    require_once("templates/single-portfolio-two.php");
    } else {
       require_once("templates/single-default-two.php");
	}
} elseif(get_theme_mod('style_h')=="three") { 
	if( has_post_format( 'gallery' ) ){ 
	    require_once("templates/single-portfolio-three.php");
    } else {
       require_once("templates/single-default-three.php");
	}
} else {
	if( has_post_format( 'gallery' ) ){ 
	    require_once("templates/single-portfolio-one.php");
    } else {
       require_once("templates/single-default-one.php");
	}
}

 ?>