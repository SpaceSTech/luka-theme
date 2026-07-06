<?php
/**
 * Server-side block variations registration.
 *
 * @package Luka_Agency
 */

namespace Luka_Agency;

defined( 'ABSPATH' ) || exit;

add_filter( 'block_type_metadata_settings', __NAMESPACE__ . '\\register_group_variations', 10, 2 );

function register_group_variations( array $settings, array $metadata ): array {
	if ( 'core/group' !== ( $metadata['name'] ?? '' ) ) {
		return $settings;
	}

	// Additional server-side configuration can be added here.
	// Client-side variations are registered in assets/js/block-variations.js (if JS is needed).

	return $settings;
}
