<?php
/**
 * Title: Hero — Primary
 * Slug: luka-agency/hero-primary
 * Categories: luka-agency-hero
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width dark navy hero with display heading, eyebrow label, lead paragraph, and two CTA buttons.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|48","right":"var:preset|spacing|6","bottom":"var:preset|spacing|48","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-base-color has-background has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--48);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--48);padding-left:var(--wp--preset--spacing--6)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">

		<!-- Eyebrow label -->
		<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Strategic Creative Agency</p>
		<!-- /wp:paragraph -->

		<!-- Display heading — Cormorant Garamond light + italic creates luxury editorial feel -->
		<!-- wp:heading {"level":1,"fontSize":"5xl","style":{"typography":{"lineHeight":"1.05","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h1 class="wp-block-heading has-5-xl-font-size" style="margin-top:0;margin-bottom:0;line-height:1.05;font-weight:300;letter-spacing:-0.02em">We Build Brands<br><em>That Matter.</em></h1>
		<!-- /wp:heading -->

		<!-- Lead paragraph -->
		<!-- wp:paragraph {"textColor":"neutral-300","fontSize":"md","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.7"}}} -->
		<p class="has-neutral-300-color has-text-color has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.7">Partner with a creative agency that blends strategy, design, and technology to deliver exceptional results for ambitious brands and organisations.</p>
		<!-- /wp:paragraph -->

		<!-- CTA buttons -->
		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"var:preset|spacing|4"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--4)">

			<!-- wp:button {"backgroundColor":"accent","textColor":"contrast","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"1rem","right":"2.5rem","bottom":"1rem","left":"2.5rem"}}}} -->
			<div class="wp-block-button has-custom-font-size">
				<a class="wp-block-button__link has-accent-background-color has-contrast-color has-text-color has-background wp-element-button" href="#contact" style="border-radius:0;padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem">View Our Work</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-luka-outlined","fontSize":"xs","style":{"border":{"radius":"0","color":"rgba(255,255,255,0.35)","width":"1px"},"spacing":{"padding":{"top":"1rem","right":"2.5rem","bottom":"1rem","left":"2.5rem"}},"color":{"text":"#F9F8F6"}}} -->
			<div class="wp-block-button has-custom-font-size is-style-luka-outlined">
				<a class="wp-block-button__link has-text-color wp-element-button" style="border-radius:0;border-color:rgba(255,255,255,0.35);border-style:solid;border-width:1px;padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem;color:#F9F8F6">Our Services</a>
			</div>
			<!-- /wp:button -->

		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
