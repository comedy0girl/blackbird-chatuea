<?php
		
	add_action( 'after_setup_theme', 'setup' );
	function setup() {

		add_theme_support( 'post-thumbnails' );
		add_image_size( 'portfolio-thumb', 200, 200, true );
		add_image_size( 'latest-port', 300, 300, true );
	
		add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );
		function custom_image_sizes_choose( $sizes ) {
		    $custom_sizes = array(
		        'portfolio-thumb' => 'Portfolio Images',
		        'latest-port' => 'Latest Gallery'
		    );
		    return array_merge( $sizes, $custom_sizes );
		}


	}	

   function register_my_menus() {
	  register_nav_menus(
	    array(
	    	'header-menu' => __( 'Header Menu' ),
	      	'footer-menu' => __( 'Footer Menu' )
	    )
	  );
	}

	@ini_set( 'upload_max_size' , '100M' );
	@ini_set( 'post_max_size', '100M');
	@ini_set( 'max_execution_time', '300' );

	add_action( 'init', 'register_my_menus' );

	add_filter( 'use_default_gallery_style', '__return_false' );
	//deactivate WordPress function
	add_shortcode('gallery', 'gallery_shortcode');






?>