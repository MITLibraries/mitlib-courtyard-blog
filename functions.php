<?php
/**
 * Courtyard-blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Courtyard-blog
 */

/**
 * Enqueue scripts.
 */
function courtyard_blog_enqueue_scripts() {
	/**
	 * IE Fallbacks.
	 *
	 * @link http://stackoverflow.com/questions/11564142/wordpress-enqueue-scripts-for-only-if-lt-ie-9
	 */
	wp_register_script( 'ie_html5shiv', get_bloginfo( 'stylesheet_url' ). '/js/html5.js', __FILE__, false, '3.7.2' );
	wp_enqueue_script( 'ie_html5shiv' );
	wp_script_add_data( 'ie_html5shiv', 'conditional', 'lt IE 9' );

	wp_register_script( 'ie_respond', '//cdn.jsdelivr.net/respond/1.4.2/respond.min.js', __FILE__, false, '1.4.2' );
	wp_enqueue_script( 'ie_respond' );
	wp_script_add_data( 'ie_respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'courtyard_blog_enqueue_scripts' );
