<?php
/**
 * Title: Blog Posts Grid
 * Slug: luka-agency/posts-grid
 * Categories: luka-agency-blog
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three-column blog post grid using the Query block with images, categories, titles, and excerpts.
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
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Insights</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:var(--wp--preset--spacing--3);margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">Ideas, perspectives, <em>and expertise</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:button {"className":"is-style-luka-ghost","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-ghost">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/blog" style="border-radius:0;padding:0">View all articles →</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:group -->

	<!-- Query loop — 3 latest posts -->
	<!-- wp:query {"queryId":30,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px">

				<!-- Featured image -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","sizeSlug":"luka-card","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

				<!-- Card body -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)">

					<!-- Category + date meta -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"bottom":"var:preset|spacing|4"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--4)">
						<!-- wp:post-terms {"term":"category","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
						<!-- wp:paragraph {"textColor":"border","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<p class="has-border-color has-text-color" style="margin-top:0;margin-bottom:0" aria-hidden="true">·</p>
						<!-- /wp:paragraph -->
						<!-- wp:post-date {"textColor":"contrast-3","fontSize":"xs","style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
					</div>
					<!-- /wp:group -->

					<!-- Post title -->
					<!-- wp:post-title {"isLink":true,"fontSize":"xl","style":{"typography":{"lineHeight":"1.25","fontWeight":"400","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} /-->

					<!-- Excerpt -->
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"textColor":"contrast-3","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.65"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} /-->

					<!-- Read more -->
					<!-- wp:read-more {"content":"Read Article →","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
