<?php
/**
 * WooCommerce integration.
 *
 * @package Luka_Agency
 */

namespace Luka_Agency;

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', __NAMESPACE__ . '\\woo_setup' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_filter( 'wc_add_to_cart_message_html', '__return_empty_string' );

function woo_setup(): void {
	add_theme_support( 'woocommerce', [
		'thumbnail_image_width'         => 600,
		'single_image_width'            => 900,
		'product_grid'                  => [
			'default_rows'    => 3,
			'min_rows'        => 1,
			'max_rows'        => 6,
			'default_columns' => 3,
			'min_columns'     => 1,
			'max_columns'     => 4,
		],
	] );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
