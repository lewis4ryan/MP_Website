<?php
/**
 * Winsome Theme Customizer.
 *
 * @package Winsome
 */

/**
 * Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function winsome_customize_register( $wp_customize ) {

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title a',
			'container_inclusive' => false,
			'render_callback'     => 'winsome_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'winsome_customize_partial_blogdescription',
		) );
	}

	// Sanitization.
	require_once trailingslashit( get_template_directory() ) . '/includes/sanitize.php';

	// Active callback.
	require_once trailingslashit( get_template_directory() ) . '/includes/active.php';

	// Load options.
	require_once trailingslashit( get_template_directory() ) . '/includes/options.php';

}
add_action( 'customize_register', 'winsome_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function winsome_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function winsome_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue style for custom customize control.
 */
function winsome_custom_customize_enqueue() {
	wp_enqueue_style( 'winsome-customize', get_template_directory_uri() . '/includes/css/customize-controls.css' );

	wp_enqueue_script( 'winsome-customize-controls', get_template_directory_uri() . '/includes/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'winsome-customize-controls', get_template_directory_uri() . '/includes/upgrade-to-pro/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'winsome_custom_customize_enqueue' );