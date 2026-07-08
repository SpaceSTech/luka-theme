<?php
/**
 * Title: Logo Marquee
 * Slug: luka-agency/logo-marquee
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Client logo strip with eyebrow label on a cream background. CSS animation via theme.css.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","right":"0","bottom":"var:preset|spacing|16","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--16);padding-right:0;padding-bottom:var(--wp--preset--spacing--16);padding-left:0">

	<!-- Eyebrow label -->
	<!-- wp:paragraph {"align":"center","textColor":"contrast-3","style":{"typography":{"fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|10"}}}} -->
	<p class="has-text-align-center has-contrast-3-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--10);font-size:var(--wp--preset--font-size--xs);font-weight:500;letter-spacing:0.12em;text-transform:uppercase">Trusted by ambitious brands</p>
	<!-- /wp:paragraph -->

	<!-- Logo strip — editors swap placeholder SVGs for real client logos -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group" style="overflow:hidden">

		<?php
		$logos = [
			[ 'label' => 'Meridian Capital',    'w' => 130, 'h' => 32 ],
			[ 'label' => 'Okonkwo & Partners',  'w' => 150, 'h' => 32 ],
			[ 'label' => 'Vantage Group',        'w' => 120, 'h' => 32 ],
			[ 'label' => 'Hartwell & Co',        'w' => 140, 'h' => 32 ],
			[ 'label' => 'Solaris Ventures',     'w' => 130, 'h' => 32 ],
			[ 'label' => 'Arch Studio',          'w' => 110, 'h' => 32 ],
		];
		?>

		<?php foreach ( $logos as $logo ) : ?>
		<!-- wp:html -->
		<figure style="flex:0 0 <?php echo esc_attr( $logo['w'] ); ?>px;margin:0;line-height:0"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='<?php echo esc_attr( $logo['w'] ); ?>' height='<?php echo esc_attr( $logo['h'] ); ?>' viewBox='0 0 <?php echo esc_attr( $logo['w'] ); ?> <?php echo esc_attr( $logo['h'] ); ?>'%3E%3Crect width='<?php echo esc_attr( $logo['w'] ); ?>' height='<?php echo esc_attr( $logo['h'] ); ?>' rx='2' fill='%23C4C0B8'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dominant-baseline='middle' font-family='sans-serif' font-size='9' fill='%23FAF9F7'%3E<?php echo rawurlencode( $logo['label'] ); ?>%3C/text%3E%3C/svg%3E" alt="<?php echo esc_attr( $logo['label'] ); ?> logo" width="<?php echo esc_attr( $logo['w'] ); ?>" height="<?php echo esc_attr( $logo['h'] ); ?>"/></figure>
		<!-- /wp:html -->
		<?php endforeach; ?>

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
