<?php
/**
 * Title: CTA — Split with Form
 * Slug: luka-agency/cta-split
 * Categories: luka-agency-cta
 * Viewport Width: 1280
 * Inserter: true
 * Description: Two-column CTA: brand message left, contact form right on a cream background.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">

		<!-- Left: brand copy -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--5);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Work With Us</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--8);line-height:1.15;font-weight:300;letter-spacing:-0.02em">Every great project begins with a <em>single conversation.</em></h2>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-luka-check","style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"0","bottom":"var:preset|spacing|10"}}},"fontSize":"sm","textColor":"contrast-2"} -->
			<ul class="wp-block-list is-style-luka-check has-contrast-2-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--10)">
				<li>Response within one business day</li>
				<li>Free strategy consultation — no obligations</li>
				<li>Transparent pricing from the first call</li>
				<li>Dedicated project manager throughout</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">Or email us directly at <a href="mailto:hello@lukaagency.com" style="color:var(--wp--preset--color--primary)">hello@lukaagency.com</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- Right: contact form (WPForms / CF7 shortcode placeholder) -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|12","right":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|12"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--12)">

				<!-- wp:heading {"level":4,"fontSize":"lg","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} -->
				<h4 class="wp-block-heading has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6)">Send us a message</h4>
				<!-- /wp:heading -->

				<!-- Replace this shortcode with your contact form plugin shortcode -->
				<!-- wp:shortcode -->
				<p>[contact-form-7 id="your-form-id" title="Contact Form"]</p>
				<!-- /wp:shortcode -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
