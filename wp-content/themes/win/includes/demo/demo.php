<?php
/**
 * Demo configuration
 *
 * @package Winsome
 */

$config = array(
	'static_page'    => 'home',
	'posts_page'     => 'blog',
	'menu_locations' => array(
		'primary' => 'main-menu',
		'social'  => 'social-menu',
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Theme Demo Content', 'winsome' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/customizer.dat',
		),
	),
);

Winsome_Demo::init( apply_filters( 'winsome_demo_filter', $config ) );
