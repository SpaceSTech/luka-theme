<?php
/**
 * Title: Card — Case Study
 * Slug: luka-agency/card-case-study
 * Categories: luka-agency-cards
 * Viewport Width: 480
 * Inserter: true
 * Description: Single case study card with 4:3 image, industry tag, project title, and excerpt.
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

	<!-- Project image -->
	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"medium_large","className":"is-style-luka-shadowed"} -->
	<figure class="wp-block-image size-medium_large is-style-luka-shadowed" style="aspect-ratio:4/3"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='480' height='360' viewBox='0 0 480 360'%3E%3Crect width='480' height='360' fill='%231A1F2E'/%3E%3Ctext x='240' y='180' text-anchor='middle' dominant-baseline='middle' font-family='sans-serif' font-size='13' fill='%23C4C0B8'%3EProject image%3C/text%3E%3C/svg%3E" alt="Case study project" style="aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- Card body -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px","top":{"width":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-width:0;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)">

		<!-- Industry tag -->
		<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
		<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3);font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Industry / Sector</p>
		<!-- /wp:paragraph -->

		<!-- Project title -->
		<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"lineHeight":"1.25","fontWeight":"400","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} -->
		<h3 class="wp-block-heading has-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);line-height:1.25;font-weight:400;letter-spacing:-0.01em"><a href="#" style="color:inherit;text-decoration:none">Project Title — What We Achieved</a></h3>
		<!-- /wp:heading -->

		<!-- Excerpt -->
		<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}},"typography":{"lineHeight":"1.65"}}} -->
		<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--5);line-height:1.65">A brief description of the project scope, the challenge faced, and the outcome delivered. Lead with impact.</p>
		<!-- /wp:paragraph -->

		<!-- CTA link -->
		<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">View Case Study →</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
