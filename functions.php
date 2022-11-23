<?php
if (is_user_logged_in()) {
    show_admin_bar(false);
}

//Add logo support
add_theme_support('custom-logo');

//Enable post thumbnails
add_theme_support('post-thumbnails');

//Returns page title
function sb_theme_get_page_title(){		
	if(is_search()){
		return "Search: ".get_search_query();
	};
	return is_category() ? single_cat_title('', false) :  get_theme_mod( 'sb_theme_homepage_title' );
}

//Returns page description/tagline
function sb_theme_get_page_tagline(){
	return is_category() ? 'Showing all posts marked as "'.strtolower(single_cat_title('', false)).'"' : get_theme_mod( 'sb_theme_homepage_tagline' );
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