<?php
/**
 * Title: Process Steps
 * Slug: luka-agency/process-steps
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Four-step numbered process with connectors, titles, and descriptions on cream background.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"560px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
		<p class="has-text-align-center has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">How We Work</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size" style="margin-top:0;margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">A process built for <em>clarity and results</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- Steps -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns">

		<?php
		$steps = [
			[
				'number'      => '01',
				'title'       => 'Discovery',
				'description' => 'We begin by immersing ourselves in your world — your goals, your audience, your competitors, and the opportunity we're here to unlock together.',
			],
			[
				'number'      => '02',
				'title'       => 'Strategy',
				'description' => 'From discovery emerges a clear strategic direction: positioning, messaging, and a roadmap that aligns every decision with your business objectives.',
			],
			[
				'number'      => '03',
				'title'       => 'Execution',
				'description' => 'Our team brings the strategy to life with precision craft — design, development, and content working in close collaboration throughout.',
			],
			[
				'number'      => '04',
				'title'       => 'Growth',
				'description' => 'We don't disappear at launch. We measure, iterate, and optimise — turning early momentum into sustained, compounding performance.',
			],
		];
		?>

		<?php foreach ( $steps as $step ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|8","bottom":"var:preset|spacing|10","left":"var:preset|spacing|8"}},"border":{"right":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--8)">

				<!-- Step number -->
				<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"3.5rem","lineHeight":"1","fontWeight":"300","letterSpacing":"-0.03em","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} -->
				<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6);font-family:var(--wp--preset--font-family--serif);font-size:3.5rem;font-weight:300;letter-spacing:-0.03em;line-height:1"><?php echo esc_html( $step['number'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"lineHeight":"1.3","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
				<h3 class="wp-block-heading has-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);line-height:1.3;font-weight:500"><?php echo esc_html( $step['title'] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.65"}}} -->
				<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.65"><?php echo esc_html( $step['description'] ); ?></p>
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
