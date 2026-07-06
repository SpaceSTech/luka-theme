<?php
/**
 * Title: WooCommerce Product Card
 * Slug: luka-agency/product-card
 * Categories: luka-agency-woo
 * Viewport Width: 400
 * Inserter: true
 * Description: Single product card with image, title, price, and add-to-cart — matches brand aesthetic.
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

	<!-- Product image -->
	<!-- wp:woocommerce/product-image {"showProductLink":true,"aspectRatio":"1"} /-->

	<!-- Card body -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px","top":{"width":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-width:0;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

		<!-- Category badge -->
		<!-- wp:woocommerce/product-category-list {"fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|2"}},"color":{"text":"var:preset|color|accent"}}} /-->

		<!-- Product title -->
		<!-- wp:post-title {"isLink":true,"fontSize":"lg","style":{"typography":{"lineHeight":"1.3","fontWeight":"400","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} /-->

		<!-- Price -->
		<!-- wp:woocommerce/product-price {"fontSize":"xl","style":{"typography":{"fontWeight":"300","letterSpacing":"-0.02em","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}},"color":{"text":"var:preset|color|primary"}}} /-->

		<!-- Add to cart -->
		<!-- wp:woocommerce/product-button {"fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.75rem","right":"1.5rem","bottom":"0.75rem","left":"1.5rem"}},"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"}}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
