<?php
/**
 * Title: FAQ Accordion
 * Slug: luka-agency/faq-accordion
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Six FAQs using native core/details block — no JavaScript, WCAG 2.2 compliant.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">

		<!-- Left: section header (sticky feel) -->
		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">

			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--5);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">FAQ</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6);line-height:1.15;font-weight:300;letter-spacing:-0.02em">Questions we get asked <em>most often</em></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.7"}}} -->
			<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--10);line-height:1.7">Can't find your answer here? We're happy to talk through your specific situation.</p>
			<!-- /wp:paragraph -->

			<!-- wp:button {"backgroundColor":"primary","textColor":"white","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.875rem","right":"2rem","bottom":"0.875rem","left":"2rem"}}}} -->
			<div class="wp-block-button has-custom-font-size">
				<a class="wp-block-button__link has-primary-background-color has-white-color has-text-color has-background wp-element-button" href="#contact" style="border-radius:0;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">Ask Us Directly</a>
			</div>
			<!-- /wp:button -->

		</div>
		<!-- /wp:column -->

		<!-- Right: accordion items -->
		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">

			<?php
			$faqs = [
				[
					'question' => 'How long does a typical project take?',
					'answer'   => 'It depends on scope, but most brand and web projects run between 8–16 weeks from kick-off to launch. We set clear milestones at the start and keep you updated throughout. Rush timelines are possible — ask us.',
				],
				[
					'question' => 'What does working with Luka Agency actually look like?',
					'answer'   => 'You\'ll have a dedicated project manager as your primary contact. We work in sprints with regular review sessions, shared project management access, and weekly status updates. No black boxes, no surprises.',
				],
				[
					'question' => 'Do you work with early-stage startups or only established businesses?',
					'answer'   => 'Both. We enjoy the energy of early-stage work and the complexity of scaling businesses. What matters most is that you\'re serious about the outcome and committed to the process.',
				],
				[
					'question' => 'What is your pricing model?',
					'answer'   => 'Most projects are scoped and priced as fixed-fee engagements so you know exactly what you\'re investing. Retained strategy and development work is available on a monthly basis. We share transparent pricing from the first conversation.',
				],
				[
					'question' => 'Do you offer ongoing support after launch?',
					'answer'   => 'Yes. We offer post-launch care packages covering maintenance, performance monitoring, and iterative improvements. Many clients continue with us on a retained basis after their initial project.',
				],
				[
					'question' => 'Can you work with our existing brand or do we need to start from scratch?',
					'answer'   => 'We do both. If your foundations are strong, we build on them. If they need rethinking, we\'ll be honest about that and help you make the right call — not the expensive one.',
				],
			];
			?>

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">

				<?php foreach ( $faqs as $faq ) : ?>
				<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}},"typography":{"fontWeight":"500","fontSize":"var:preset|font-size|md"}}} -->
				<details class="wp-block-details" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);font-weight:500;font-size:var(--wp--preset--font-size--md)">
					<summary><?php echo esc_html( $faq['question'] ); ?></summary>
					<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"0"}},"typography":{"lineHeight":"1.7","fontWeight":"400"}}} -->
					<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:0;line-height:1.7;font-weight:400"><?php echo esc_html( $faq['answer'] ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->
				<?php endforeach; ?>

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
