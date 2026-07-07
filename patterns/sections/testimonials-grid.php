<?php
/**
 * Title: Testimonials Grid
 * Slug: luka-agency/testimonials-grid
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three client testimonials with star ratings, serif pull quotes, author names, and company details.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"560px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">
		<!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
		<p class="has-text-align-center has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Client Stories</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size" style="margin-top:0;margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">What our clients <em>say about us</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- Testimonial cards -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<?php
		$testimonials = [
			[
				'quote'   => 'Luka Agency transformed our brand from a generic presence into something that genuinely reflects who we are. The results exceeded every expectation we had going in.',
				'name'    => 'Sarah Mitchell',
				'title'   => 'CEO',
				'company' => 'Meridian Capital',
				'stars'   => 5,
			],
			[
				'quote'   => 'The team\'s strategic thinking is exceptional. They didn\'t just redesign our website — they rethought our entire digital presence. Revenue is up 40% year-on-year.',
				'name'    => 'James Okonkwo',
				'title'   => 'Founder',
				'company' => 'Okonkwo &amp; Partners',
				'stars'   => 5,
			],
			[
				'quote'   => 'Working with Luka felt effortless. They listened, they challenged our assumptions in the right ways, and they delivered something we\'re genuinely proud of.',
				'name'    => 'Elena Vasquez',
				'title'   => 'Head of Brand',
				'company' => 'Vantage Group',
				'stars'   => 5,
			],
		];
		?>

		<?php foreach ( $testimonials as $testimonial ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">

				<!-- Star rating -->
				<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}}}} -->
				<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--5);font-size:0.9rem;letter-spacing:0.1em"><?php echo str_repeat( '★', $testimonial['stars'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- Quote text -->
				<!-- wp:paragraph {"fontSize":"md","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","lineHeight":"1.65","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}}}} -->
				<p class="has-md-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--8);font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:300;line-height:1.65">"<?php echo esc_html( $testimonial['quote'] ); ?>"</p>
				<!-- /wp:paragraph -->

				<!-- Separator -->
				<!-- wp:separator {"backgroundColor":"border","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}},"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-border-color has-background is-style-wide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6)"/>
				<!-- /wp:separator -->

				<!-- Author -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|sm"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="margin-top:0;margin-bottom:0;font-weight:600;font-size:var(--wp--preset--font-size--sm)"><?php echo esc_html( $testimonial['name'] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"xs","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-contrast-3-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $testimonial['title'] ); ?>, <?php echo $testimonial['company']; ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
