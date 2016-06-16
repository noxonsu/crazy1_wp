<?php

require_once get_template_directory() . '/include/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'themename_recommend_plugin' );

function themename_recommend_plugin() {
 
    $plugins = array(
		array(
			'name'		=> 'the_crazy_plugin', 
			'slug'		=> 'the-crazy-plugin',
			'source'    => get_stylesheet_directory() . '/plugins/the-crazy-plugin.zip',
			'required'	=> true
		),
    );
 
    tgmpa( $plugins);
 
}

add_action( 'after_setup_theme', 'slug_post_formats' );
function slug_post_formats() {
    add_theme_support(
        'post-formats', array(
            'gallery',
        )
    );
}

function figur($f) {
    $figur = array( 1=>'cross',2=>'circle',3=>'triangle',4=>'circle',5=>'triangle',6=>'cross',7=>'triangle',8=>'cross',9=>'circle' ); 
	return $figur[$f];
}

function sort_comment_fields( $fields ){
    $new_fields = array();
    $myorder = array('author','email','url','comment');
 
    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }
 
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;
    return $new_fields;
}
add_filter('comment_form_fields', 'sort_comment_fields' );

register_nav_menus(array('primary'=>'Main menu',));

function my_revisions_to_keep( $revisions ) { return 2;}
add_filter( 'wp_revisions_to_keep', 'my_revisions_to_keep' );

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
add_theme_support('category-thumbnails');

add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background', $args );
add_theme_support( 'custom-header', $args );

function is_subpage() {
    global $post;
    if (is_page() && $post->post_parent) {
        return $post->post_parent;
    } else {
        return false;
    }
}

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

function enqueue_comment_reply() {
	if( is_singular() )
		wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );

function is_subcategory ($catid) {
    $currentcat = get_category($catid);
    if ($currentcat->parent) {
        return true;
    } else {
        return false;
    }
} 

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'category-thumb',600,540 );
	add_image_size( 'homecategory-thumb',1230,540);
	add_image_size( 'portfolio-thumb',700,700);
	add_image_size( 'category-thumb-home',750,330);
}

require_once("include/customizer.php");
require_once("include/menu.php");
include_once('include/custom-fields.php');
include_once('include/loadmore.php');
include_once('include/post-like.php');

?>