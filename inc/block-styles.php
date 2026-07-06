<?php
/**
 * Register custom block styles.
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

add_action( 'init', __NAMESPACE__ . '\\register_block_styles' );

function register_block_styles(): void {
	$styles = [
		'core/button' => [
			[ 'name' => 'luka-outlined', 'label' => __( 'Outlined', 'luka-agency' ) ],
			[ 'name' => 'luka-ghost',    'label' => __( 'Ghost',    'luka-agency' ) ],
			[ 'name' => 'luka-accent',   'label' => __( 'Accent',   'luka-agency' ) ],
		],
		'core/separator' => [
			[ 'name' => 'luka-dotted',   'label' => __( 'Dotted',   'luka-agency' ) ],
			[ 'name' => 'luka-gradient', 'label' => __( 'Gradient', 'luka-agency' ) ],
		],
		'core/image' => [
			[ 'name' => 'luka-rounded',  'label' => __( 'Rounded',  'luka-agency' ) ],
			[ 'name' => 'luka-shadowed', 'label' => __( 'Shadowed', 'luka-agency' ) ],
		],
		'core/quote' => [
			[ 'name' => 'luka-bordered', 'label' => __( 'Bordered', 'luka-agency' ) ],
		],
		'core/group' => [
			[ 'name' => 'luka-card',    'label' => __( 'Card',    'luka-agency' ) ],
			[ 'name' => 'luka-glass',   'label' => __( 'Glass',   'luka-agency' ) ],
			[ 'name' => 'luka-section', 'label' => __( 'Section', 'luka-agency' ) ],
		],
		'core/list' => [
			[ 'name' => 'luka-check', 'label' => __( 'Checklist',  'luka-agency' ) ],
			[ 'name' => 'luka-arrow', 'label' => __( 'Arrow List', 'luka-agency' ) ],
		],
		'core/heading' => [
			[ 'name' => 'luka-display', 'label' => __( 'Display', 'luka-agency' ) ],
			[ 'name' => 'luka-eyebrow', 'label' => __( 'Eyebrow', 'luka-agency' ) ],
		],
		'core/paragraph' => [
			[ 'name' => 'luka-lead',    'label' => __( 'Lead',    'luka-agency' ) ],
			[ 'name' => 'luka-caption', 'label' => __( 'Caption', 'luka-agency' ) ],
		],
	];

	foreach ( $styles as $block => $block_styles ) {
		foreach ( $block_styles as $style ) {
			register_block_style( $block, $style );
		}
	}
}
