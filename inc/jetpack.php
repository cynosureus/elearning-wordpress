<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package cynosure_elearning
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function cynosure_elearning_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'cynosure_elearning_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function cynosure_elearning_jetpack_setup
add_action( 'after_setup_theme', 'cynosure_elearning_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function cynosure_elearning_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function cynosure_elearning_infinite_scroll_render
