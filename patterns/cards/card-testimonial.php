<?php
/**
 * Title: Card — Testimonial
 * Slug: luka-agency/card-testimonial
 * Categories: luka-agency-cards
 * Viewport Width: 400
 * Inserter: true
 * Description: Single testimonial card with serif pull quote, author name, role, and company.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">

	<!-- Large decorative quote mark -->
	<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"5rem","lineHeight":"1","fontFamily":"var:preset|font-family|serif","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
	<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--serif);font-size:5rem;font-weight:300;line-height:1">"</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"md","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","lineHeight":"1.6","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}}}} -->
	<p class="has-md-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--8);font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:300;line-height:1.6">The testimonial quote goes here — let the client speak in their own voice. Authentic, specific praise resonates far more than generic compliments.</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"backgroundColor":"border","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-color has-background is-style-wide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|sm"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="margin-top:0;margin-bottom:0;font-weight:600;font-size:var(--wp--preset--font-size--sm)">Client Name</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"xs","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-contrast-3-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0">Job Title, Company Name</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
