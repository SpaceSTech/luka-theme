<?php
/**
 * Accessibility — body class helpers, language direction.
 *
 * @package Luka_Agency
 */

declare( strict_types=1 );

namespace Luka_Agency;

add_filter( 'body_class', __NAMESPACE__ . '\\body_classes' );

/**
 * Add contextual body classes used for CSS targeting.
 *
 * @param string[] $classes Existing body classes.
 * @return string[]
 */
function body_classes( array $classes ): array {
	if ( is_singular() ) {
		$classes[] = 'singular';
	}

	if ( has_nav_menu( 'primary' ) ) {
		$classes[] = 'has-primary-nav';
	}

	// RTL support indicator.
	if ( is_rtl() ) {
		$classes[] = 'rtl';
	}

	return $classes;
}
