<?php
/**
 * Title: Pricing Table
 * Slug: luka-agency/pricing-table
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three-tier pricing with featured middle column, feature lists, and CTAs.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"560px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">
		<!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
		<p class="has-text-align-center has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Investment</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);line-height:1.15;font-weight:300;letter-spacing:-0.02em">Straightforward pricing, <em>no surprises</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.7"}}} -->
		<p class="has-text-align-center has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.7">All plans include a dedicated project manager and our standard 30-day post-launch support window.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Pricing columns -->
	<!-- wp:columns {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-stretch">

		<?php
		$plans = [
			[
				'name'     => 'Essentials',
				'price'    => '4,800',
				'period'   => 'one-time',
				'tagline'  => 'For startups and early-stage brands ready to make a mark.',
				'featured' => false,
				'features' => [
					'Brand identity foundations',
					'5-page responsive website',
					'SEO setup & Google Analytics',
					'1 round of revisions',
					'30-day post-launch support',
				],
				'cta_text' => 'Get Started',
				'cta_href' => '#contact',
			],
			[
				'name'     => 'Growth',
				'price'    => '12,500',
				'period'   => 'one-time',
				'tagline'  => 'The complete brand and web package for ambitious businesses.',
				'featured' => true,
				'features' => [
					'Full brand strategy & identity',
					'10-page custom website',
					'Content strategy & copywriting',
					'Performance marketing setup',
					'3 rounds of revisions',
					'90-day post-launch support',
					'Priority response SLA',
				],
				'cta_text' => 'Most Popular — Start Here',
				'cta_href' => '#contact',
			],
			[
				'name'     => 'Enterprise',
				'price'    => 'Custom',
				'period'   => 'bespoke scope',
				'tagline'  => 'Tailored engagements for complex organisations and multi-market brands.',
				'featured' => false,
				'features' => [
					'Everything in Growth',
					'Multi-market brand architecture',
					'Dedicated senior team',
					'Ongoing retained strategy',
					'SLA-backed support contract',
				],
				'cta_text' => 'Talk to Us',
				'cta_href' => '#contact',
			],
		];
		?>

		<?php foreach ( $plans as $plan ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"border":{"color":"<?php echo $plan['featured'] ? 'var(--wp--preset--color--primary)' : 'var(--wp--preset--color--border)'; ?>","style":"solid","width":"<?php echo $plan['featured'] ? '2px' : '1px'; ?>"}},"backgroundColor":"<?php echo $plan['featured'] ? 'primary' : 'base'; ?>","textColor":"<?php echo $plan['featured'] ? 'base' : 'primary'; ?>","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group <?php echo $plan['featured'] ? 'has-primary-background-color has-base-color' : 'has-base-background-color has-primary-color'; ?> has-background has-text-color" style="border-color:<?php echo $plan['featured'] ? 'var(--wp--preset--color--primary)' : 'var(--wp--preset--color--border)'; ?>;border-style:solid;border-width:<?php echo $plan['featured'] ? '2px' : '1px'; ?>;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">

				<?php if ( $plan['featured'] ) : ?>
				<!-- wp:paragraph {"fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6);font-weight:600;letter-spacing:0.12em;text-transform:uppercase">★ Most Popular</p>
				<!-- /wp:paragraph -->
				<?php endif; ?>

				<!-- Plan name -->
				<!-- wp:heading {"level":3,"fontSize":"lg","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 class="wp-block-heading has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3);font-weight:500;letter-spacing:-0.01em"><?php echo esc_html( $plan['name'] ); ?></h3>
				<!-- /wp:heading -->

				<!-- Price -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--6)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"1","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"<?php echo $plan['featured'] ? 'var:preset|color|accent' : 'var:preset|color|primary'; ?>"}}} -->
					<p class="<?php echo $plan['featured'] ? 'has-accent-color' : 'has-primary-color'; ?> has-text-color" style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--serif);font-size:2.5rem;font-weight:300;letter-spacing:-0.03em;line-height:1"><?php echo esc_html( $plan['price'] !== 'Custom' ? '£' . $plan['price'] : 'Custom' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"xs","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"<?php echo $plan['featured'] ? 'rgba(255,255,255,0.6)' : 'var:preset|color|contrast-3'; ?>"}}} -->
					<p class="has-xs-font-size" style="margin-top:0;margin-bottom:0;text-transform:uppercase;letter-spacing:0.08em;font-weight:500;color:<?php echo $plan['featured'] ? 'rgba(255,255,255,0.6)' : 'var(--wp--preset--color--contrast-3)'; ?>"><?php echo esc_html( $plan['period'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Tagline -->
				<!-- wp:paragraph {"fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}},"typography":{"lineHeight":"1.6"},"color":{"text":"<?php echo $plan['featured'] ? 'rgba(255,255,255,0.75)' : 'var:preset|color|contrast-3'; ?>"}}} -->
				<p class="has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--8);line-height:1.6;color:<?php echo $plan['featured'] ? 'rgba(255,255,255,0.75)' : 'var(--wp--preset--color--contrast-3)'; ?>"><?php echo esc_html( $plan['tagline'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- Separator -->
				<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}},"color":{"background":"<?php echo $plan['featured'] ? 'rgba(255,255,255,0.15)' : 'var:preset|color|border'; ?>"}}} -->
				<hr class="wp-block-separator has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--8);background-color:<?php echo $plan['featured'] ? 'rgba(255,255,255,0.15)' : 'var(--wp--preset--color--border)'; ?>"/>
				<!-- /wp:separator -->

				<!-- Feature list -->
				<!-- wp:list {"className":"is-style-luka-check","style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"0","bottom":"var:preset|spacing|10"}}},"fontSize":"sm"} -->
				<ul class="wp-block-list is-style-luka-check has-sm-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--10)">
					<?php foreach ( $plan['features'] as $feature ) : ?>
					<li><?php echo esc_html( $feature ); ?></li>
					<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->

				<!-- CTA -->
				<!-- wp:button {"<?php echo $plan['featured'] ? 'backgroundColor":"accent","textColor":"primary"' : 'className":"is-style-luka-outlined","textColor":"primary"'; ?>","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.875rem","right":"1.5rem","bottom":"0.875rem","left":"1.5rem"}}}} -->
				<div class="wp-block-button has-custom-font-size">
					<a class="wp-block-button__link has-primary-color has-text-color wp-element-button <?php echo $plan['featured'] ? 'has-accent-background-color has-background' : 'is-style-luka-outlined'; ?>" href="<?php echo esc_url( $plan['cta_href'] ); ?>" style="border-radius:0;padding-top:0.875rem;padding-right:1.5rem;padding-bottom:0.875rem;padding-left:1.5rem"><?php echo esc_html( $plan['cta_text'] ); ?></a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
