<?php
/**
 * Title: Card — Service
 * Slug: luka-agency/card-service
 * Categories: luka-agency-cards
 * Viewport Width: 400
 * Inserter: true
 * Description: Single service card with gold accent bar, title, description, and learn more link.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|8","bottom":"var:preset|spacing|10","left":"var:preset|spacing|8"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--8)">

	<!-- Gold accent bar -->
	<!-- wp:html -->
	<div aria-hidden="true" style="width:2.5rem;height:2px;background-color:var(--wp--preset--color--accent);margin-bottom:var(--wp--preset--spacing--6)"></div>
	<!-- /wp:html -->

	<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"lineHeight":"1.3","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
	<h3 class="wp-block-heading has-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);line-height:1.3;font-weight:400">Service Name</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}},"typography":{"lineHeight":"1.65"}}} -->
	<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6);line-height:1.65">A concise description of this service and the specific value it delivers to clients. Keep it focused and outcome-oriented.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Learn More →</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
