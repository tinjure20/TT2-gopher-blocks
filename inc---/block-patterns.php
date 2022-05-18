<?php
/**
 * TT2 Gopher: Block Patterns
 *
 * @since TT2 Gopher 0.1.0
 */

/**
 * Registers block patterns and categories.
 *
 */
function tt2gopher_register_block_patterns() {
	$block_pattern_categories = array(
		'general'   => array( 'label' => __( 'TT2 Gopher - General', 'tt2gopher' ) ),
		'header'   => array( 'label' => __( 'TT2 Gopher - Header', 'tt2gopher' ) ),
		'footer'   => array( 'label' => __( 'TT2 Gopher - Footer', 'tt2gopher' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since TT2 Gopher 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'tt2gopher_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'footer-with-background',
		'footer-default',
		'header-default',
		'hidden-404',

	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'tt2gopher_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'tt2gopher/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'tt2gopher_register_block_patterns', 9 );
