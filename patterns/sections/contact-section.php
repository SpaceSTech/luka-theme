<?php
/**
 * Title: Contact Section
 * Slug: luka-agency/contact-section
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full contact section — info column left (address, email, phone, hours) and form right.
 */
?>

<!-- wp:group {"align":"full","anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" id="contact" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">

		<!-- Left: contact information -->
		<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">

			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--5);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Get In Touch</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6);line-height:1.15;font-weight:300;letter-spacing:-0.02em">Every great project begins with a <em>single conversation.</em></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|12"}},"typography":{"lineHeight":"1.7"}}} -->
			<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--12);line-height:1.7">Whether you have a brief ready or just an idea, we'd love to hear from you. We respond to every enquiry within one business day.</p>
			<!-- /wp:paragraph -->

			<!-- Contact details -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|8"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--10)">

				<?php
				$contact_items = [
					[
						'label'   => 'Email',
						'value'   => 'hello@lukaagency.com',
						'href'    => 'mailto:hello@lukaagency.com',
					],
					[
						'label'   => 'Phone',
						'value'   => '+1 (555) 000-0000',
						'href'    => 'tel:+15550000000',
					],
					[
						'label'   => 'Office',
						'value'   => '12 Regent Street, London W1B 4AA',
						'href'    => null,
					],
					[
						'label'   => 'Hours',
						'value'   => 'Mon–Fri, 9am–6pm GMT',
						'href'    => null,
					],
				];
				foreach ( $contact_items as $item ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|contrast-3"}}} -->
					<p class="has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--contrast-3)"><?php echo esc_html( $item['label'] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"base","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"400"},"color":{"text":"var:preset|color|primary"}}} -->
					<p class="has-base-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;color:var(--wp--preset--color--primary)">
						<?php if ( $item['href'] ) : ?>
						<a href="<?php echo esc_attr( $item['href'] ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html( $item['value'] ); ?></a>
						<?php else : ?>
						<?php echo esc_html( $item['value'] ); ?>
						<?php endif; ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>

			</div>
			<!-- /wp:group -->

			<!-- Trust signals -->
			<!-- wp:list {"className":"is-style-luka-check","style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"0","bottom":"0"}}},"fontSize":"sm","textColor":"contrast-2"} -->
			<ul class="wp-block-list is-style-luka-check has-contrast-2-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">
				<li>Response within one business day</li>
				<li>Free strategy consultation — no obligations</li>
				<li>Transparent pricing from the first call</li>
			</ul>
			<!-- /wp:list -->

		</div>
		<!-- /wp:column -->

		<!-- Right: contact form -->
		<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|12","right":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|12"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--12)">

				<!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|2"}},"typography":{"fontWeight":"500"}}} -->
				<h3 class="wp-block-heading has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--2);font-weight:500">Send us a message</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}}}} -->
				<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--8)">Fill in the form and we'll be in touch shortly.</p>
				<!-- /wp:paragraph -->

				<!-- Replace with your contact form plugin shortcode -->
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
