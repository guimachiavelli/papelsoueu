<?php
	
	// thumbnails
	add_theme_support( 'post-thumbnails', array('post', 'book') );  
	set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails
    add_image_size('featured', 955, 450, true); // Full size screen
    add_image_size('book_cover', 400, 400, false); // Full size screen


	function custom_excerpt_length( $length ) {
		return 32;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	function new_excerpt_more( $more ) {
		return '&nbsp;[…]';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	

	//show posts of post type 'post' and 'nota' on the main page
	add_action( 'pre_get_posts', 'query_nota' );
	function query_nota( $query ) {
		if ( is_home() && $query->is_main_query() ) {
			$query->set( 'post_type', array( 'post', 'nota') );
		}
		return $query;
	}


	// adding the image filter we'll use for front_page images
	imagefx_register_filter('o papel sou eu','papel_filter');
	function papel_filter( &$image ) {
		imagefilter( $image, IMG_FILTER_GRAYSCALE );
		imagefilter( $image, IMG_FILTER_CONTRAST, -165 );
		//imagefilter( $image, IMG_FILTER_COLORIZE, 205, 0, 0 );
	}


?>
