<?php
/**
 * Courtyard-blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Courtyard-blog
 */

function taxonomy_init() {
	// create a new taxonomy
	register_taxonomy(
		'department',
		'post',
		array(
			'label' => __( 'Department' )
		)
	);

	// create a new taxonomy
	register_taxonomy(
		'meeting',
		'post',
		array(
			'label' => __( 'Meeting' )
		)
	);
}
add_action( 'init', 'taxonomy_init' );