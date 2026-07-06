<?php
/**
 * Title: Stats Row
 * Slug: luka-agency/stats-row
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Four key metrics in a full-width navy band with gold numbers.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|6","bottom":"var:preset|spacing|20","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-base-color has-background has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--6)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns">

		<?php
		$stats = [
			[ 'number' => '120+', 'label' => 'Projects Delivered' ],
			[ 'number' => '96%',  'label' => 'Client Retention Rate' ],
			[ 'number' => '8yr',  'label' => 'Industry Experience' ],
			[ 'number' => '3×',   'label' => 'Average ROI Increase' ],
		];
		?>

		<?php foreach ( $stats as $index => $stat ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|8","bottom":"var:preset|spacing|10","left":"var:preset|spacing|8"}},"border":{"right":{"color":"rgba(255,255,255,0.1)","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-right-color:rgba(255,255,255,0.1);border-right-style:solid;border-right-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--8)">

				<!-- wp:heading {"level":2,"textColor":"accent","fontSize":"4xl","style":{"typography":{"lineHeight":"1","fontWeight":"300","letterSpacing":"-0.03em","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h2 class="wp-block-heading has-accent-color has-text-color has-4-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--serif);font-weight:300;letter-spacing:-0.03em;line-height:1"><?php echo esc_html( $stat['number'] ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"neutral-400","fontSize":"xs","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-neutral-400-color has-text-color has-xs-font-size" style="margin-top:0;margin-bottom:0;text-transform:uppercase;letter-spacing:0.08em;font-weight:500"><?php echo esc_html( $stat['label'] ); ?></p>
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
