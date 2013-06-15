<?php

	function register_my_menus() {
	  register_nav_menus(
	    array( 'header-menu' => __( 'Header Menu' ) )
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	add_theme_support( 'post-thumbnails' );
	register_sidebar();
	
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );
	
?>