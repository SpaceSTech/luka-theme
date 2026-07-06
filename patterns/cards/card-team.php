<?php
/**
 * Title: Card — Team Member
 * Slug: luka-agency/card-team
 * Categories: luka-agency-cards
 * Viewport Width: 360
 * Inserter: true
 * Description: Single team member card with portrait image, name, role, and short bio.
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

	<!-- Portrait image -->
	<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
	<figure class="wp-block-image size-medium" style="aspect-ratio:3/4"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='360' height='480' viewBox='0 0 360 480'%3E%3Crect width='360' height='480' fill='%23EFEDE8'/%3E%3Ctext x='180' y='240' text-anchor='middle' dominant-baseline='middle' font-family='sans-serif' font-size='13' fill='%23B0ADA6'%3ETeam photo%3C/text%3E%3C/svg%3E" alt="Team member photo" style="aspect-ratio:3/4;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- Member info -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px","top":{"width":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-width:0;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

		<!-- wp:heading {"level":3,"fontSize":"lg","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|1"}}}} -->
		<h3 class="wp-block-heading has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--1);font-weight:500;letter-spacing:-0.01em">Team Member Name</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
		<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Role &amp; Title</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.65"}}} -->
		<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.65">A brief biography highlighting this person's background, expertise, and what they bring to the team and to client work.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
