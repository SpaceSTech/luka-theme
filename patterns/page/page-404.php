<?php
/**
 * Title: 404 Page
 * Slug: luka-agency/page-404
 * Categories: luka-agency-page
 * Viewport Width: 1280
 * Inserter: true
 * Description: Elegant 404 error page with large display number, search, and navigation options.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Large 404 display number -->
	<!-- wp:paragraph {"align":"center","textColor":"accent","className":"is-style-luka-display","style":{"typography":{"fontSize":"9rem","lineHeight":"1","fontWeight":"300","letterSpacing":"-0.05em","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
	<p class="has-text-align-center has-accent-color has-text-color is-style-luka-display" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--serif);font-size:9rem;font-weight:300;letter-spacing:-0.05em;line-height:1">404</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"2xl","style":{"typography":{"lineHeight":"1.3","fontWeight":"300","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}}}} -->
	<h1 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--5);line-height:1.3;font-weight:300;letter-spacing:-0.01em">This page doesn't exist</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"contrast-3","fontSize":"md","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|12"}},"typography":{"lineHeight":"1.7"}}} -->
	<p class="has-text-align-center has-contrast-3-color has-text-color has-md-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--12);line-height:1.7">The page you're looking for may have moved, been renamed, or simply never existed. Try searching for what you need.</p>
	<!-- /wp:paragraph -->

	<!-- Search -->
	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the site…","buttonText":"Search","buttonUseIcon":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|12"}},"border":{"radius":"0"}}} /-->

	<!-- Separator -->
	<!-- wp:separator {"backgroundColor":"border","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|12"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-color has-background is-style-wide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--12)"/>
	<!-- /wp:separator -->

	<!-- Navigation options -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:button {"backgroundColor":"primary","textColor":"white","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.875rem","right":"2rem","bottom":"0.875rem","left":"2rem"}}}} -->
		<div class="wp-block-button has-custom-font-size">
			<a class="wp-block-button__link has-primary-background-color has-white-color has-text-color has-background wp-element-button" href="/" style="border-radius:0;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">← Back to Home</a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-luka-outlined","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.875rem","right":"2rem","bottom":"0.875rem","left":"2rem"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-outlined">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/work" style="border-radius:0;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">View Our Work</a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-luka-ghost","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.875rem","right":"2rem","bottom":"0.875rem","left":"2rem"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-ghost">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/contact" style="border-radius:0;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">Contact Us</a>
		</div>
		<!-- /wp:button -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
