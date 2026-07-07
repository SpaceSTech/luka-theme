<?php
/**
 * Title: Portfolio Grid
 * Slug: luka-agency/portfolio-grid
 * Categories: luka-agency-sections
 * Viewport Width: 1280
 * Inserter: true
 * Description: Live case-study portfolio grid using the Query block — pulls published Case Study posts automatically.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|16"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Our Work</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"3xl","style":{"typography":{"lineHeight":"1.15","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-3-xl-font-size" style="margin-top:var(--wp--preset--spacing--3);margin-bottom:0;line-height:1.15;font-weight:300;letter-spacing:-0.02em">Selected projects &amp; <em>case studies</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:button {"className":"is-style-luka-ghost","textColor":"primary","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-luka-ghost">
			<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/work" style="border-radius:0;padding:0">View all projects →</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:group -->

	<!-- Query block — pulls case-study CPT posts automatically -->
	<!-- wp:query {"queryId":20,"query":{"perPage":6,"pages":0,"offset":0,"postType":"case-study","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"backgroundColor":"base"},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-base-background-color has-background">

				<!-- Project featured image -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","sizeSlug":"luka-card","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

				<!-- Card body -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}},"border":{"color":"var:preset|color|border","style":"solid","width":"1px","top":{"width":"0"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-width:0;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)">

					<!-- Industry taxonomy terms -->
					<!-- wp:post-terms {"term":"industry","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} /-->

					<!-- Project title -->
					<!-- wp:post-title {"isLink":true,"fontSize":"xl","style":{"typography":{"lineHeight":"1.25","fontWeight":"400","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} /-->

					<!-- Excerpt -->
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":18,"textColor":"contrast-3","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|5"}}}} /-->

					<!-- View project link -->
					<!-- wp:read-more {"content":"View Case Study →","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- Empty state when no case studies exist yet -->
		<!-- wp:query-no-results -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"480px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"center","textColor":"contrast-3","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} -->
				<p class="has-text-align-center has-contrast-3-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6)">No case studies published yet. Add your first project in <strong>Case Studies → Add New</strong>.</p>
				<!-- /wp:paragraph -->
				<!-- wp:button {"backgroundColor":"primary","textColor":"white","fontSize":"xs","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0.875rem","right":"2rem","bottom":"0.875rem","left":"2rem"}}}} -->
				<div class="wp-block-button has-custom-font-size" style="text-align:center">
					<a class="wp-block-button__link has-primary-background-color has-white-color has-text-color has-background wp-element-button" href="/wp-admin/post-new.php?post_type=case-study" style="border-radius:0;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">Add First Project</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
