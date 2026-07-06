<?php
/**
 * Title: Team Grid
 * Slug: luka-agency/team-grid
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Four team members in a 2×2 grid with portrait images, names, roles, and social links.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|16"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3);font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">The People</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:0;margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">Meet the <em>team behind the work</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:button {"className":"is-style-luka-ghost","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-ghost">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/about" style="border-radius:0;padding:0">View full team →</a>
		</div>
		<!-- /wp:button -->

	</div>
	<!-- /wp:group -->

	<!-- Team grid -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|12","left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<?php
		$members = [
			[
				'name'  => 'Luka Novak',
				'role'  => 'Founder & Creative Director',
				'bio'   => 'With 12 years shaping brand identities for global clients, Luka founded the agency on the belief that design should be both beautiful and effective.',
				'color' => '%23EFEDE8',
			],
			[
				'name'  => 'Amara Osei',
				'role'  => 'Head of Strategy',
				'bio'   => 'Amara brings rigorous analytical thinking to every brief, translating business objectives into actionable creative and digital strategies.',
				'color' => '%23E8E5DF',
			],
			[
				'name'  => 'Tomas Berger',
				'role'  => 'Lead Developer',
				'bio'   => 'Tomas architects high-performance digital experiences, obsessing over Core Web Vitals, accessibility, and the quality of every line of code.',
				'color' => '%23EFEDE8',
			],
			[
				'name'  => 'Isla Mackenzie',
				'role'  => 'Senior Designer',
				'bio'   => 'Isla's background in editorial design informs her meticulous approach to typography, layout, and the fine details that separate good from exceptional.',
				'color' => '%23E8E5DF',
			],
		];
		?>

		<?php foreach ( $members as $member ) : ?>
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">

				<!-- Portrait image -->
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full"} -->
				<figure class="wp-block-image size-full" style="aspect-ratio:3/4"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='480' height='640' viewBox='0 0 480 640'%3E%3Crect width='480' height='640' fill='<?php echo $member['color']; ?>'/%3E%3Ctext x='240' y='320' text-anchor='middle' dominant-baseline='middle' font-family='sans-serif' font-size='13' fill='%23B0ADA6'%3ETeam photo%3C/text%3E%3C/svg%3E" alt="<?php echo esc_attr( $member['name'] ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- Member info -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px","top":{"width":"0"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-width:0;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1","margin":{"bottom":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--4)">
						<!-- wp:heading {"level":3,"fontSize":"lg","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<h3 class="wp-block-heading has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html( $member['name'] ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $member['role'] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.65"}}} -->
					<p class="has-contrast-3-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.65"><?php echo esc_html( $member['bio'] ); ?></p>
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
