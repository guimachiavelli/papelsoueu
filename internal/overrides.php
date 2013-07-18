<?php
	
	// avoid having jquery duplicates
	if( !is_admin()){
		wp_deregister_script('jquery');
	}
	
	//cleaning up header trash
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');

	// remove the useless default image filters
	imagefx_unregister_filter( array( 	
			'brighten_100', 
			'brighten_50', 
			'colorize_blue', 
			'colorize_green', 
			'colorize_purple', 
			'colorize_red', 
			'colorize_yellow', 
			'contrast_negative', 
			'contrast_positive', 
			'emboss', 
			'emboss_edge', 
			'filter_negative', 
			'filter_smooth', 
			'gaussian_blur', 
			'grayscale', 
			'greyscale_except_blue', 
			'greyscale_except_green', 
			'greyscale_except_red',
			'mean_removal', 
			'photonegative', 
			'selective_blur', 
			'sepia', 
			'sepia_45_45_0', 
			'sepia_60_60_0', 
			'sepia_90_90_0', 
			'sepia_90_60_30', 
			'sepia_100_70_50', 
			'sepia_100_50_0', 
			'rounded_corners_5',
			'rounded_corners_10',
			'rounded_corners_15',
			'rounded_corners_20'
		) );


?>
