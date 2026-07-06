<?php
/**
 * Title: Blog Posts List
 * Slug: luka-agency/posts-list
 * Categories: luka-agency-blog
 * Viewport Width: 1280
 * Inserter: true
 * Description: Horizontal list-style post layout with large title, date, and category — editorial feel.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","right":"var:preset|spacing|6","bottom":"var:preset|spacing|32","left":"var:preset|spacing|6"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--6)">

	<!-- Query loop — list style -->
	<!-- wp:query {"queryId":2,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}},"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)">

				<!-- Left: meta + title -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:post-terms {"term":"category","textColor":"accent","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
						<!-- wp:post-date {"textColor":"contrast-3","fontSize":"xs","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"fontSize":"2xl","style":{"typography":{"lineHeight":"1.2","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}} /-->

				</div>
				<!-- /wp:group -->

				<!-- Right: read more -->
				<!-- wp:paragraph {"textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<!-- wp:read-more {"content":"Read →","textColor":"accent","fontSize":"xs","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|16"}}}} -->
		<div class="wp-block-query-pagination" style="margin-top:var(--wp--preset--spacing--16)">
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		</div>
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
