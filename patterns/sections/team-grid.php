<?php
/**
 * Title: Team Grid
 * Slug: luka-agency/team-grid
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Four team members in a 4-column row with portrait images, names, roles, and bios.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|16"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">The People</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:var(--wp--preset--spacing--3);margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">Meet the <em>team behind the work</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:button {"className":"is-style-luka-ghost","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-ghost">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/about" style="border-radius:0;padding:0">Meet the full team →</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:group -->

	<!-- Four-column team grid -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns">

		<?php
		$members = [
			[
				'name'  => 'Luka Novak',
				'role'  => 'Founder & Creative Director',
				'bio'   => '12 years shaping brand identities for global clients, founded on the belief that design must be both beautiful and effective.',
				'color' => '%23EFEDE8',
			],
			[
				'name'  => 'Amara Osei',
				'role'  => 'Head of Strategy',
				'bio'   => 'Rigorous analytical thinking applied to every brief, translating business goals into actionable creative and digital strategies.',
				'color' => '%23E8E5DF',
			],
			[
				'name'  => 'Tomas Berger',
				'role'  => 'Lead Developer',
				'bio'   => 'High-performance digital experiences built with obsessive attention to Core Web Vitals, accessibility, and code quality.',
				'color' => '%23EFEDE8',
			],
			[
				'name'  => 'Isla Mackenzie',
				'role'  => 'Senior Designer',
				'bio'   => 'Editorial design background informing meticulous typography and layout — finding the fine details that separate good from exceptional.',
				'color' => '%23E8E5DF',
			],
		];
		?>

		<?php foreach ( $members as $member ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">

				<!-- Portrait image — 3:4 aspect ratio -->
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"luka-portrait"} -->
				<figure class="wp-block-image size-luka-portrait" style="aspect-ratio:3/4"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='400' viewBox='0 0 300 400'%3E%3Crect width='300' height='400' fill='<?php echo esc_attr( $member['color'] ); ?>'/%3E%3Ctext x='150' y='200' text-anchor='middle' dominant-baseline='middle' font-family='sans-serif' font-size='11' fill='%23B0ADA6'%3ETeam photo%3C/text%3E%3C/svg%3E" alt="<?php echo esc_attr( $member['name'] ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- Info block -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px","top":{"width":"0"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-width:0;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)">

					<!-- wp:heading {"level":3,"fontSize":"lg","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|1"}}}} -->
					<h3 class="wp-block-heading has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--1);font-weight:500;letter-spacing:-0.01em"><?php echo esc_html( $member['name'] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
					<p class="has-accent-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--4);font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $member['role'] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"contrast-3","fontSize":"xs","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.65"}}} -->
					<p class="has-contrast-3-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;line-height:1.65"><?php echo esc_html( $member['bio'] ); ?></p>
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
