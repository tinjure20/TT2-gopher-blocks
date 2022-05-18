
<?php
/**
 * Title: 404 Content
 * Slug: tt2gopher/hidden-404
 * Categories: tt2gopher-general
 * Viewport Width: 1280
 * Inserter: no
 */

?>

<!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary"} -->
	<h3 class="has-text-align-center has-primary-color has-text-color" id="page-not-found">Page Not Found</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>It seems we can’t find what you’re looking for. Perhaps searching can help.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":16} -->
	<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->

	<!-- wp:spacer {"height":32} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="has-text-align-center has-text-color" id="here-are-our-latest-posts">Here are Our Latest Posts</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":8} -->
	<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:separator -->
	<hr class="wp-block-separator"/>
	<!-- /wp:separator -->

	<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"x-large"} /-->

	<!-- wp:post-excerpt /-->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination -->
	<!-- wp:query-pagination-previous /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->