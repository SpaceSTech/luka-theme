<?php
/**
 * Performance — head cleanup, font preloading, image & script optimisations.
 *
 * Every optimisation is documented with WHY it helps and which Lighthouse
 * metric it targets (LCP, CLS, TBT, Speed Index).
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

// =============================================================================
// HEAD BLOAT REMOVAL
// Every tag below adds bytes to every HTML response with zero end-user benefit.
// Removing them improves TTFB (fewer bytes transferred) and reduces parse time.
// =============================================================================

remove_action( 'wp_head', 'rsd_link' );                          // Really Simple Discovery — dead spec
remove_action( 'wp_head', 'wlwmanifest_link' );                  // Windows Live Writer manifest
remove_action( 'wp_head', 'wp_generator' );                      // WordPress version fingerprint (security)
remove_action( 'wp_head', 'wp_shortlink_wp_head' );              // ?p=123 URL — zero SEO value
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );   // prev/next rel links — unused
remove_action( 'wp_head', 'feed_links_extra', 3 );               // Category/tag/author RSS feeds
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );      // REST API URL — information leak
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );     // oEmbed endpoint discovery
remove_action( 'template_redirect', 'rest_output_link_header', 11 ); // REST URL in X-WP-API-Root header

// =============================================================================
// EMOJI POLYFILL REMOVAL  (~100 KB JS + CSS on every page load)
// Every modern browser renders emoji natively. The WordPress polyfill is dead
// weight that blocks the parser and inflates TBT (Total Blocking Time).
// =============================================================================

remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );
add_filter( 'emoji_svg_url', '__return_false' );

// =============================================================================
// UNUSED SCRIPT REMOVAL
// wp-embed powers oEmbed preview cards inside comments. Agency sites have no
// use for this. Removing it saves ~10 KB of JS that would otherwise block the
// main thread and inflate TBT.
// =============================================================================

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\dequeue_unused_scripts', 100 );

function dequeue_unused_scripts(): void {
	wp_dequeue_script( 'wp-embed' );
}

// =============================================================================
// FONT PRELOADING  (LCP, CLS)
// Preloading the WOFF2 files used above the fold eliminates FOIT (invisible
// text) and FOUT (layout shift when webfont swaps in). Only the weights that
// appear in the hero/header are preloaded; every other variant is loaded lazily
// via the @font-face declarations in theme.json (which use font-display:swap).
//
// Why priority 1: preloads must appear before the browser's preload scanner
// reaches the stylesheet, otherwise the scanner may start downloading the
// font files twice.
// =============================================================================

add_action( 'wp_head', __NAMESPACE__ . '\\preload_fonts', 1 );

function preload_fonts(): void {
	$critical = [
		'plus-jakarta-sans/plus-jakarta-sans-400.woff2',  // Body text — heaviest FOIT impact
		'plus-jakarta-sans/plus-jakarta-sans-600.woff2',  // Navigation labels + CTA buttons
		'cormorant-garamond/cormorant-garamond-300.woff2', // Hero heading — LCP text element
	];

	foreach ( $critical as $path ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin="anonymous">' . "\n",
			esc_url( LUKA_AGENCY_URI . '/assets/fonts/' . $path )
		);
	}
}

// =============================================================================
// IMAGE DECODING  (TBT, INP)
// WordPress 5.5+ adds loading="lazy" automatically. We additionally add
// decoding="async" so the browser decodes image data on a worker thread instead
// of the main thread. This frees the main thread for JS parsing and user input,
// directly improving Total Blocking Time and Interaction to Next Paint.
// =============================================================================

add_filter( 'wp_content_img_tag', __NAMESPACE__ . '\\add_async_decoding', 10, 3 );

/**
 * @param string $image         Full <img> tag HTML.
 * @param string $context       e.g. 'the_content', 'widget_text_content'.
 * @param int    $attachment_id Attachment ID (0 if unknown).
 */
function add_async_decoding( string $image, string $context, int $attachment_id ): string {
	if ( ! str_contains( $image, 'decoding=' ) ) {
		$image = str_replace( '<img ', '<img decoding="async" ', $image );
	}
	return $image;
}

// =============================================================================
// LCP IMAGE PRIORITISATION  (LCP)
// On singular posts and pages, the featured image is almost always the Largest
// Contentful Paint element. Three things are needed to optimise it:
//  1. fetchpriority="high" — tells the browser this is the most important
//     resource and should be fetched before other images.
//  2. loading="eager" — overrides the default lazy-loading so the browser
//     starts downloading immediately, not when the image scrolls into view.
//  3. decoding="sync" — for the LCP image we want synchronous decoding so the
//     browser can paint it as soon as the bytes arrive (not defer to a worker).
//
// This only fires on singular views with a post thumbnail. Homepage hero
// sections use block images that editors should mark as "High priority" in the
// block editor for the same effect.
// =============================================================================

add_filter( 'post_thumbnail_html', __NAMESPACE__ . '\\prioritise_lcp_image' );

function prioritise_lcp_image( string $html ): string {
	if ( ! is_singular() || ! in_the_loop() ) {
		return $html;
	}

	// Swap lazy → eager and add high fetch priority.
	$html = str_replace( ' loading="lazy"', ' loading="eager"', $html );

	if ( ! str_contains( $html, 'fetchpriority=' ) ) {
		$html = str_replace( '<img ', '<img fetchpriority="high" decoding="sync" ', $html );
	}

	return $html;
}

// =============================================================================
// RESOURCE HINTS CLEANUP  (network requests)
// WordPress adds dns-prefetch hints for fonts.googleapis.com and
// fonts.gstatic.com in every HTML response. Since we self-host all fonts there
// are no connections to those servers — the hints waste a DNS lookup and
// trigger a Lighthouse "avoid unnecessary third-party" warning.
// =============================================================================

add_filter( 'wp_resource_hints', __NAMESPACE__ . '\\clean_resource_hints', 10, 2 );

/**
 * @param array<int,mixed> $hints         Existing hints.
 * @param string           $relation_type dns-prefetch|preconnect|prefetch|prerender.
 * @return array<int,mixed>
 */
function clean_resource_hints( array $hints, string $relation_type ): array {
	if ( 'dns-prefetch' !== $relation_type ) {
		return $hints;
	}

	$remove = [ 'fonts.googleapis.com', 'fonts.gstatic.com' ];

	return array_values(
		array_filter(
			$hints,
			static fn( mixed $hint ) => ! array_reduce(
				$remove,
				static fn( bool $carry, string $host ) => $carry || str_contains( (string) $hint, $host ),
				false
			)
		)
	);
}

// =============================================================================
// RESPONSIVE IMAGE SIZES  (LCP, bandwidth)
// WordPress automatically generates srcset and sizes attributes using the image
// sizes registered in setup.php. No additional code is needed here — we just
// need to ensure the theme declares the same sizes used in templates so
// WordPress can build accurate srcset descriptors.
//
// The wp_calculate_image_sizes filter below provides a tighter sizes hint for
// full-width hero images, preventing the browser from downloading a wider image
// than the viewport.
// =============================================================================

add_filter( 'wp_calculate_image_sizes', __NAMESPACE__ . '\\hero_image_sizes', 10, 5 );

/**
 * Override the default sizes attribute for hero-sized images.
 * Default is "100vw" which causes browsers to add scrollbar width to the calc.
 * Using calc(100vw - 1rem) is more accurate and prevents downloading
 * ~30px of unnecessary image width.
 *
 * @param string       $sizes         The calculated sizes attribute.
 * @param array|string $size          Requested image size.
 * @param string|null  $image_src     The image URL.
 * @param array|null   $image_meta    Image metadata array.
 * @param int          $attachment_id Attachment post ID.
 */
function hero_image_sizes(
	string $sizes,
	array|string $size,
	?string $image_src,
	?array $image_meta,
	int $attachment_id
): string {
	if ( 'luka-hero' === $size ) {
		return '(min-width: 1280px) 1280px, calc(100vw - 1rem)';
	}
	if ( 'luka-card-wide' === $size ) {
		return '(min-width: 1024px) 50vw, 100vw';
	}
	return $sizes;
}
