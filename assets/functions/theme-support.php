<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support('post-thumbnails');
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);
	add_image_size( 'single-post', 700, 400, true );
	add_image_size( 'full-width', 1100, 450, true );
	add_image_size( 'testimonial', 100, 100 );
	add_image_size( 'about-image', 640, 640 );

	// Add RSS Support
	add_theme_support('automatic-feed-links');

	// Add Support for WP Menus
	add_theme_support( 'menus' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	/* add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); */	
	
} /* end theme support */
?>
