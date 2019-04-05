<?php
/**
 * Core functions.
 *
 * @package Winsome
 */

if ( ! function_exists( 'winsome_get_option' ) ) :

	/**
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function winsome_get_option( $key ) {

		if ( empty( $key ) ) {
			return;
		}

		$value = '';

		$default = winsome_get_default_theme_options();
		$default_value = null;
		if ( is_array( $default ) && isset( $default[ $key ] ) ) {
			$default_value = $default[ $key ];
		}

		if ( null !== $default_value ) {
			$value = get_theme_mod( $key, $default_value );
		}
		else {
			$value = get_theme_mod( $key );
		}

		return $value;

	}
endif;

if ( ! function_exists( 'winsome_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function winsome_get_default_theme_options() {

		$defaults = array();

		// Header.
		$defaults['show_title']   = true;
		$defaults['show_tagline'] = true;

		// Layout.
		$defaults['global_layout']  = 'right-sidebar';

		// Footer.
		$defaults['copyright_text'] = esc_html__( 'Copyright &copy; All rights reserved.', 'winsome' );

		// Blog.
		$defaults['excerpt_length'] = 40;
		$defaults['read_more_text'] = esc_html__( 'Read more', 'winsome' );

		// Breadcrumb.
		$defaults['breadcrumb_type'] = 'simple';

		// Slider.
		$defaults['slider_status']            = 'disable';
		$defaults['slider_excerpt_length']    = 20;

		return $defaults;
	}
endif;
