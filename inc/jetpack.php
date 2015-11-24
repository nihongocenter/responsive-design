<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package nihongo-center-responsive
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function nihongo_center_responsive_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'nihongo_center_responsive_jetpack_setup' );
