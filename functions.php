<?php
/**
 * Luka Agency — theme bootstrapper.
 *
 * Requires feature files only. No logic lives here.
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LUKA_AGENCY_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'LUKA_AGENCY_DIR', get_template_directory() );
define( 'LUKA_AGENCY_URI', get_template_directory_uri() );

foreach ( [
	'/inc/setup.php',
	'/inc/pattern-categories.php',
	'/inc/block-styles.php',
	'/inc/performance.php',
	'/inc/accessibility.php',
] as $file ) {
	require_once LUKA_AGENCY_DIR . $file;
}

if ( class_exists( 'WooCommerce' ) ) {
	require_once LUKA_AGENCY_DIR . '/inc/woocommerce.php';
}
