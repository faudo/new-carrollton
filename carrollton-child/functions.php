<?php
function gon_enqueue_child_styles() { 
	//register styles
	wp_register_style( 'brand-base', get_stylesheet_directory_uri() . '/css/carrollton-brand-base.css' );
	wp_register_style( 'carrollton-child', get_stylesheet_directory_uri() . '/style.css' );
	
	//enqueue styles
	wp_enqueue_style( 'brand-base', get_stylesheet_directory_uri() . '/css/carrollton-brand-base.css' );
	wp_enqueue_style( 'carrollton-child', get_stylesheet_directory_uri() . '/style.css', 'theme-base' );
}

//theme styles triggered at 11 to ensure overwriting all other styles
add_action( 'wp_enqueue_scripts', 'gon_enqueue_child_styles', 11 );


if ( ! function_exists( 'gon_enqueue_child_scripts' ) ) {
	function gon_enqueue_child_scripts()
	{	
		wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/js/theme.js', array('jquery'), null, true );
	}
}
add_action( 'wp_enqueue_scripts', 'gon_enqueue_child_scripts' );


//initiate custom fields
require_once( get_stylesheet_directory() . '/carrollton-custom-fields-config.php' );
require_once( get_stylesheet_directory() . '/header/functions.php' );
require_once( get_stylesheet_directory() . '/slideshow/admin-styles.php' );
require_once( get_stylesheet_directory() . '/home-columns/admin-styles.php' );


// hide advanced settings for all users other than GON
add_action('admin_head', 'remove_adv_access');
function remove_adv_access() {
	$myuser = wp_get_current_user();
	if($myuser->user_login!=='gon'){
	echo '<style>
	    a[href="admin.php?page=adv-settings"] {display:none!important;}
	</style>';
	}
}