<?php
//Add logo support
add_theme_support('custom-logo');

//Enable post thumbnails
add_theme_support('post-thumbnails');

//Returns page title
function sb_theme_get_page_title(){		
	return is_category() ? single_cat_title('', false) :  "test";
}

//Returns page description/tagline
function sb_theme_get_page_tagline(){
	return is_category() ? 'Showing all posts marked as "'.strtolower(single_cat_title('', false)).'"' : get_theme_mod( 'homepage_tagline' );
}


//Registers menus
function sb_theme_register_menus() {
    register_nav_menu("navigation-menu", "Main Navigation");
}


//Hooks
add_action( 'init', 'sb_theme_register_menus' );

//Includes: 
//Add theme customizations
include('customizer.php');
?>