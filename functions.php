<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	$style_version = filemtime( get_stylesheet_directory() . '/style.css' );
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		$style_version
	);

	$script_path = get_stylesheet_directory() . '/scripts.js';
	if ( file_exists( $script_path ) ) {
		$script_version = filemtime( $script_path );
		wp_enqueue_script(
			'hello-elementor-child-scripts',
			get_stylesheet_directory_uri() . '/scripts.js',
			[],
			$script_version,
			true
		);
	}

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );
