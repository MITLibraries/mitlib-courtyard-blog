<?php
/**
 * Courtyard-blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Courtyard-blog
 */

/**
 * Posted_on rewrite
 */
function courtyard_posted_on() {
	print '<span class="sep">' . esc_html__( 'Posted on ', 'twentyeleven' ) . '</span>';
	printf( '<time class="entry-date" datetime="%1$s" pubdate>%2$s</time>',
		esc_attr( get_the_date( 'c' ) ),
		esc_html__( get_the_date(), 'twentyeleven' )
	);
}

/**
 * Post title (with link)
 */
function courtyard_entry_link() {
	printf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) );
	courtyard_entry_title();
	print '</a>';
}

/**
 * Post title rewrite
 */
function courtyard_entry_title() {
	// Translators: used between list items, there is a space after the comma.
	$category_single = get_the_category();
	$category_single = $category_single[0]->name;

	// Translators: used between list items, there is a space after the comma.
	$tag_single = str_replace( 'sticky','',strip_tags( get_the_tag_list( '', '', '' ) ) );

	if ( $tag_single ) {
		$courtyard_post_title = __( '%1$s: %2$s Meeting', 'courtyard-blog' );
	} elseif ( $category_single ) {
		$courtyard_post_title = __( '%s$s Meeting', 'courtyard-blog' );
	} else {
		$courtyard_post_title = __( 'General Meeting', 'courtyard-blog' );
	}
	printf(
		esc_html( $courtyard_post_title ),
		esc_html( $category_single ),
		esc_html( $tag_single )
	);
}
