<?php
/**
 * Performance — head cleanup, font preloading, script deferral.
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

// Strip output that leaks version info or adds no SEO value.
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

// Emoji polyfill ships ~100 KB of JS+CSS on every page load.
remove_action( 'wp_head',           'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles',   'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter( 'emoji_svg_url', '__return_false' );

add_action( 'wp_head', __NAMESPACE__ . '\\preload_fonts', 1 );

/**
 * Preload the two critical font files that appear above the fold.
 * Every other weight loads lazily through theme.json @font-face declarations.
 */
function preload_fonts(): void {
	$critical = [
		'plus-jakarta-sans/plus-jakarta-sans-400.woff2',
		'plus-jakarta-sans/plus-jakarta-sans-600.woff2',
		'cormorant-garamond/cormorant-garamond-300.woff2',
	];

	foreach ( $critical as $path ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin="anonymous">' . "\n",
			esc_url( LUKA_AGENCY_URI . '/assets/fonts/' . $path )
		);
	}
}
