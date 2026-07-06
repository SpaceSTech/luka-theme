<?php
/**
 * Block Bindings API — registers custom binding sources (WordPress 6.5+).
 *
 * @package Luka_Agency
 */

namespace Luka_Agency;

defined( 'ABSPATH' ) || exit;

add_action( 'init', __NAMESPACE__ . '\\register_bindings' );

function register_bindings(): void {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		'luka-agency/site-meta',
		[
			'label'              => __( 'Luka Agency Site Meta', 'luka-agency' ),
			'uses_context'       => [ 'postId', 'postType' ],
			'get_value_callback' => __NAMESPACE__ . '\\site_meta_binding_value',
		]
	);
}

function site_meta_binding_value( array $source_args, \WP_Block $block, string $attribute_name ): ?string {
	$key = $source_args['key'] ?? '';

	return match ( $key ) {
		'agency_phone'   => get_option( 'luka_agency_phone', '' ),
		'agency_email'   => get_option( 'luka_agency_email', 'hello@lukaagency.com' ),
		'agency_address' => get_option( 'luka_agency_address', '' ),
		default          => null,
	};
}
