<?php
/**
 * Functions for active_callback.
 *
 * @package Winsome
 */

if ( ! function_exists( 'winsome_is_featured_slider_active' ) ) :

	/**
	 * Check if featured slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function winsome_is_featured_slider_active( $control ) {

		if ( 'disable' !== $control->manager->get_setting( 'slider_status' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;