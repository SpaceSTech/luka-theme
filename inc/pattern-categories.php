<?php
/**
 * Register custom block pattern categories.
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

add_action( 'init', __NAMESPACE__ . '\\register_pattern_categories' );

function register_pattern_categories(): void {
	$categories = [
		'luka-agency-hero'     => __( 'Heroes',           'luka-agency' ),
		'luka-agency-cta'      => __( 'Calls to Action',  'luka-agency' ),
		'luka-agency-cards'    => __( 'Cards',             'luka-agency' ),
		'luka-agency-sections' => __( 'Page Sections',    'luka-agency' ),
		'luka-agency-blog'     => __( 'Blog',              'luka-agency' ),
		'luka-agency-page'     => __( 'Page Elements',    'luka-agency' ),
		'luka-agency-woo'      => __( 'WooCommerce',      'luka-agency' ),
	];

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, [ 'label' => $label ] );
	}
}
