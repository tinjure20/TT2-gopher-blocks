<?php
/**
 * Dark footer wtih title and citation
 */
return array(
	'title'      => __( 'Footer with background', 'tt2gopher' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"background-header","textColor":"foreground","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull has-foreground-color has-background-header-background-color has-text-color has-foreground has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center">' .
		sprintf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'tt2gopher' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'tt2gopher' ) ) . '" rel="nofollow">WordPress</a> | TT2 Gopher, a modified TT2 theme.'
		) . '</p>
		<!-- /wp:paragraph --></div>
      <!-- /wp:group -->',
);
