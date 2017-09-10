<?php 

/*
 * Add MarkDown suport in CPT.
 */
add_action('init', 'portfolio_md');
function portfolio_md() {
    add_post_type_support( 'portfolio', 'wpcom-markdown' );
}



/*
 * Add post_thumbnails suport.
 */

if (function_exists('add_theme_support'))
{
  
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1920, 360, true); // Large Thumbnail
    add_image_size('medium', 600, 300, true); // Medium Thumbnail
    // add_image_size('small', 270, 200, true); // Small Thumbnail
}
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );




/**
 * Load site scripts.
 */
function devframework_scripts() {
	$template_url = get_template_directory_uri();

	// Load main stylesheet.
	wp_enqueue_style( 'devframework-style', get_stylesheet_uri(), array(), 1.2, 'all' );

	// jQuery.
	// wp_enqueue_script( 'jquery' );

	// General scripts.
	wp_enqueue_script( 'devframework-scripts', $template_url . '/dist/js/scripts.combined.min.js', array('jquery'), null, true );

}

add_action( 'wp_enqueue_scripts', 'devframework_scripts', 1 );

/**
 * Custom stylesheet URI.
 */
function devframewok_stylesheet_uri( $uri, $dir ) {
	return $dir . '/dist/css/styles.combined.min.css';
}

add_filter( 'stylesheet_uri', 'devframewok_stylesheet_uri', 10, 2 );


// Limite words in excerpt function
function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Hide de admin bar
add_filter('show_admin_bar', '__return_false');



?>