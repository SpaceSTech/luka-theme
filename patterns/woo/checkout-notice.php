<?php
/**
 * Title: WooCommerce Checkout Notice
 * Slug: luka-agency/checkout-notice
 * Categories: luka-agency-woo
 * Viewport Width: 1280
 * Inserter: true
 * Description: Trust signal bar for checkout — secure badge, refund policy, and support line.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group">

		<!-- Secure checkout -->
		<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"xs","style":{"typography":{"fontWeight":"500","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-contrast-3-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:0.04em">🔒 SSL Secured Checkout</p>
		<!-- /wp:paragraph -->

		<!-- Separator dot -->
		<!-- wp:paragraph {"textColor":"border","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-border-color has-text-color" style="margin-top:0;margin-bottom:0" aria-hidden="true">·</p>
		<!-- /wp:paragraph -->

		<!-- Refund policy -->
		<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"xs","style":{"typography":{"fontWeight":"500","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-contrast-3-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:0.04em">✓ 30-Day Satisfaction Guarantee</p>
		<!-- /wp:paragraph -->

		<!-- Separator dot -->
		<!-- wp:paragraph {"textColor":"border","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-border-color has-text-color" style="margin-top:0;margin-bottom:0" aria-hidden="true">·</p>
		<!-- /wp:paragraph -->

		<!-- Support line -->
		<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"xs","style":{"typography":{"fontWeight":"500","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-contrast-3-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:0.04em">Need help? <a href="mailto:hello@lukaagency.com" style="color:var(--wp--preset--color--accent);text-decoration:none">hello@lukaagency.com</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
