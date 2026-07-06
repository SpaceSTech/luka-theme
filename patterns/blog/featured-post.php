<?php
/**
 * Title: Featured Post
 * Slug: luka-agency/featured-post
 * Categories: luka-agency-blog
 * Viewport Width: 1280
 * Inserter: true
 * Description: Single pinned latest post — full-width image hero with overlaid title and meta.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">

	<!-- wp:query {"queryId":3,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:cover {"dimRatio":55,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":560,"minHeightUnit":"px","isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover is-dark" style="min-height:560px;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">
				<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim" style="opacity:0.55"></span>
				<!-- wp:post-featured-image {"isLink":false,"style":{"position":{"type":""}}} /-->

				<div class="wp-block-cover__inner-container">

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
					<div class="wp-block-group">

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|accent"}}} -->
							<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Featured</p>
							<!-- /wp:paragraph -->
							<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"500","letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"rgba(255,255,255,0.65)"}}} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:post-title {"isLink":true,"fontSize":"4xl","style":{"typography":{"lineHeight":"1.1","fontWeight":"300","letterSpacing":"-0.02em","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent"}}}}} /-->

						<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25,"style":{"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"rgba(255,255,255,0.75)"}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
						<div class="wp-block-group">
							<!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"500","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"rgba(255,255,255,0.55)"}}} /-->
							<!-- wp:read-more {"content":"Read Article →","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|accent"}}} /-->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</div>
			</div>
			<!-- /wp:cover -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
