<?php
/**
 * TT2 Gopher: Block Styles
 *
 * @package TT2 Gopher
 * @since 0.1
 */

if ( ! function_exists( 'tt2gopher_register_block_styles' ) ) :

	function tt2gopher_register_block_styles() {

		if ( function_exists( 'register_block_style' ) ) {

			/**
			 * Register block styles
			 */

		   //Separator: Thick.
				register_block_style(
					'core/separator',
					array(
						'name'  => 'tt2gopher-separator-thick',
						'label' => esc_html__( 'Thick', 'tt2gopher' ),
						'style_handle' => 'tt2gopher-separator-thick',
					)
				);
				// Separator: Thin.
			register_block_style(
				'core/separator',
				array(
					'name'  => 'tt2gopher-separator-thin',
					'label' => esc_html__( 'Thin', 'tt2gopher' ),
					'style_handle' => 'tt2gopher-separator-thin',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'tt2gopher_register_block_styles' );
