<?php
/**
 * Theme setup — support declarations, image sizes, menus, asset enqueueing.
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

add_action( 'after_setup_theme',  __NAMESPACE__ . '\\setup' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );
add_action( 'init',               __NAMESPACE__ . '\\register_post_types' );
add_action( 'init',               __NAMESPACE__ . '\\register_taxonomies' );
add_action( 'elementor/theme/register_locations', __NAMESPACE__ . '\\register_elementor_locations' );

/**
 * Core theme support flags, image sizes, and nav menu locations.
 */
function setup(): void {
	load_theme_textdomain( 'luka-agency', LUKA_AGENCY_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	// Named image sizes used across patterns and templates.
	add_image_size( 'luka-hero',      1920, 1080, true );
	add_image_size( 'luka-card',       800,  600, true );
	add_image_size( 'luka-card-wide', 1200,  600, true );
	add_image_size( 'luka-square',     600,  600, true );
	add_image_size( 'luka-portrait',   600,  800, true );
	add_image_size( 'luka-avatar',     120,  120, true );

	register_nav_menus( [
		'primary' => __( 'Primary Navigation', 'luka-agency' ),
		'footer'  => __( 'Footer Navigation',  'luka-agency' ),
		'legal'   => __( 'Legal Navigation',   'luka-agency' ),
		'social'  => __( 'Social Links',       'luka-agency' ),
	] );
}

/**
 * Front-end stylesheets.
 *
 * theme.css handles anything theme.json cannot express:
 * skip links, z-index, backdrop-filter, transitions, hover effects.
 *
 * woocommerce.css is loaded only on WooCommerce pages (shop, cart,
 * checkout, account) — shipping it on every non-shop page wastes
 * bandwidth and inflates the Lighthouse "unused CSS" audit.
 */
function enqueue_assets(): void {
	wp_enqueue_style(
		'luka-agency-theme',
		LUKA_AGENCY_URI . '/assets/css/theme.css',
		[],
		LUKA_AGENCY_VERSION
	);

	if (
		class_exists( 'WooCommerce' ) &&
		( is_woocommerce() || is_cart() || is_checkout() || is_account_page() )
	) {
		wp_enqueue_style(
			'luka-agency-woocommerce',
			LUKA_AGENCY_URI . '/assets/css/woocommerce.css',
			[ 'luka-agency-theme' ],
			LUKA_AGENCY_VERSION
		);
	}
}

/**
 * Custom post types — Case Study, Team Member, Testimonial.
 */
function register_post_types(): void {
	// Case Study.
	register_post_type( 'case-study', [
		'labels'        => get_labels( 'Case Study', 'Case Studies' ),
		'public'        => true,
		'hierarchical'  => false,
		'show_in_rest'  => true,
		'rest_base'     => 'case-studies',
		'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
		'has_archive'   => true,
		'rewrite'       => [ 'slug' => 'work', 'with_front' => false ],
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-portfolio',
	] );

	// Team Member.
	register_post_type( 'team-member', [
		'labels'        => get_labels( 'Team Member', 'Team Members' ),
		'public'        => true,
		'hierarchical'  => false,
		'show_in_rest'  => true,
		'rest_base'     => 'team',
		'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ],
		'has_archive'   => false,
		'rewrite'       => [ 'slug' => 'team', 'with_front' => false ],
		'menu_position' => 6,
		'menu_icon'     => 'dashicons-groups',
	] );

	// Testimonial (not publicly queryable — used via blocks/patterns only).
	register_post_type( 'testimonial', [
		'labels'              => get_labels( 'Testimonial', 'Testimonials' ),
		'public'              => false,
		'publicly_queryable'  => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'rest_base'           => 'testimonials',
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ],
		'has_archive'         => false,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-format-quote',
	] );
}

/**
 * Taxonomies — Industry, Service (case-study), Department (team-member).
 */
function register_taxonomies(): void {
	register_taxonomy( 'industry', [ 'case-study' ], [
		'labels'       => [ 'name' => __( 'Industries', 'luka-agency' ), 'singular_name' => __( 'Industry', 'luka-agency' ) ],
		'hierarchical' => true,
		'show_in_rest' => true,
		'rewrite'      => [ 'slug' => 'industry' ],
	] );

	register_taxonomy( 'service', [ 'case-study' ], [
		'labels'       => [ 'name' => __( 'Services', 'luka-agency' ), 'singular_name' => __( 'Service', 'luka-agency' ) ],
		'hierarchical' => false,
		'show_in_rest' => true,
		'rewrite'      => [ 'slug' => 'service' ],
	] );

	register_taxonomy( 'department', [ 'team-member' ], [
		'labels'       => [ 'name' => __( 'Departments', 'luka-agency' ), 'singular_name' => __( 'Department', 'luka-agency' ) ],
		'hierarchical' => true,
		'show_in_rest' => true,
		'rewrite'      => [ 'slug' => 'department' ],
	] );
}

/**
 * Register Elementor theme locations so header/footer can optionally
 * be managed via Elementor Pro Theme Builder.
 */
function register_elementor_locations( $elementor_theme_manager ): void {
	$elementor_theme_manager->register_location( 'header' );
	$elementor_theme_manager->register_location( 'footer' );
	$elementor_theme_manager->register_location( 'single' );
	$elementor_theme_manager->register_location( 'archive' );
}

/**
 * DRY label builder for CPTs.
 *
 * @param string $singular Singular label.
 * @param string $plural   Plural label.
 * @return array<string, string>
 */
function get_labels( string $singular, string $plural ): array {
	return [
		/* translators: %s: Post type singular name. */
		'name'               => _x( $plural,                        'post type general name', 'luka-agency' ),
		'singular_name'      => _x( $singular,                      'post type singular name', 'luka-agency' ),
		/* translators: %s: Post type singular name. */
		'add_new_item'       => sprintf( __( 'Add New %s',   'luka-agency' ), $singular ),
		'edit_item'          => sprintf( __( 'Edit %s',       'luka-agency' ), $singular ),
		'view_item'          => sprintf( __( 'View %s',       'luka-agency' ), $singular ),
		'search_items'       => sprintf( __( 'Search %s',    'luka-agency' ), $plural ),
		'not_found'          => sprintf( __( 'No %s found.', 'luka-agency' ), strtolower( $plural ) ),
		'not_found_in_trash' => sprintf( __( 'No %s found in Trash.', 'luka-agency' ), strtolower( $plural ) ),
	];
}
