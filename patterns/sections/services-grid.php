<?php
/**
 * Title: Services Grid
 * Slug: luka-agency/services-grid
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Six services in a 3×2 bordered grid with gold accent bars, titles, descriptions, and learn-more links.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">What We Do</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:var(--wp--preset--spacing--3);margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">Services built for <em>ambitious brands</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:button {"className":"is-style-luka-ghost","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-ghost">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/services" style="border-radius:0;padding:0">View all services →</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:group -->

	<!-- Services grid -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns">

		<?php
		$services = [
			[
				'number'      => '01',
				'title'       => 'Brand Strategy',
				'description' => 'We define the positioning, voice, and visual identity that sets your brand apart and keeps it consistent across every touchpoint.',
				'link'        => '/services/brand-strategy',
			],
			[
				'number'      => '02',
				'title'       => 'Web Design &amp; Development',
				'description' => 'High-performance websites engineered for conversion, built to scale, and designed to leave a lasting first impression.',
				'link'        => '/services/web-design',
			],
			[
				'number'      => '03',
				'title'       => 'Digital Marketing',
				'description' => 'Data-driven campaigns across search, social, and content that attract the right audience and turn attention into revenue.',
				'link'        => '/services/digital-marketing',
			],
			[
				'number'      => '04',
				'title'       => 'UX &amp; Product Design',
				'description' => 'Intuitive interfaces and seamless user journeys crafted through research, testing, and obsessive attention to detail.',
				'link'        => '/services/ux-design',
			],
			[
				'number'      => '05',
				'title'       => 'Content &amp; SEO',
				'description' => 'Editorial content, keyword strategy, and technical SEO that builds authority, earns trust, and compounds over time.',
				'link'        => '/services/content-seo',
			],
			[
				'number'      => '06',
				'title'       => 'Analytics &amp; CRO',
				'description' => 'We instrument your funnel, surface the right data, and run structured experiments to improve conversion at every step.',
				'link'        => '/services/analytics',
			],
		];
		?>

		<?php foreach ( $services as $service ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|8","bottom":"var:preset|spacing|10","left":"var:preset|spacing|8"}},"border":{"right":{"color":"var:preset|color|border","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--8)">

				<!-- Number + accent bar -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--6)">
					<!-- wp:separator {"backgroundColor":"accent","style":{"layout":{"selfStretch":"fixed","flexSize":"2rem"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-style-wide"} -->
					<hr class="wp-block-separator has-text-color has-accent-color has-accent-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
					<!-- /wp:separator -->
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"300","letterSpacing":"-0.01em","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|contrast-3"}}} -->
					<p class="has-contrast-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:300;letter-spacing:-0.01em"><?php echo esc_html( $service['number'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"lineHeight":"1.3","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
				<h3 class="wp-block-heading has-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);line-height:1.3;font-weight:500"><?php echo $service['title']; ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}},"typography":{"lineHeight":"1.65"}}} -->
				<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6);line-height:1.65"><?php echo $service['description']; ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><a href="<?php echo esc_url( $service['link'] ); ?>" style="color:inherit;text-decoration:none">Learn More →</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
