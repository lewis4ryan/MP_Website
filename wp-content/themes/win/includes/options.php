<?php
/**
 * Options.
 *
 * @package Winsome
 */

class Winsome_Info extends WP_Customize_Control {
    public $type = 'info';
    public $label = '';
    public function render_content() {
    ?>
        <h2><?php echo esc_html( $this->label ); ?></h2>
    <?php
    }
}

$default = winsome_get_default_theme_options();

// Add Theme Options Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
		'title'      => esc_html__( 'Theme Options', 'winsome' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
	)
);

// Header Section.
$wp_customize->add_section( 'section_header',
	array(
		'title'      => esc_html__( 'Header Options', 'winsome' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'show_title',
	array(
		'default'           => $default['show_title'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'winsome_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'show_title',
	array(
		'label'    => esc_html__( 'Show Site Title', 'winsome' ),
		'section'  => 'section_header',
		'type'     => 'checkbox',
		'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'show_tagline',
	array(
		'default'           => $default['show_tagline'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'winsome_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'show_tagline',
	array(
		'label'    => esc_html__( 'Show Tagline', 'winsome' ),
		'section'  => 'section_header',
		'type'     => 'checkbox',
		'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'section_layout',
	array(
		'title'      => esc_html__( 'Layout Options', 'winsome' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'global_layout',
	array(
		'default'           => $default['global_layout'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'winsome_sanitize_select',
	)
);
$wp_customize->add_control( 'global_layout',
	array(
		'label'    => esc_html__( 'Global Layout', 'winsome' ),
		'section'  => 'section_layout',
		'type'     => 'radio',
		'priority' => 100,
		'choices'  => array(
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'winsome' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'winsome' ),
				'no-sidebar'    => esc_html__( 'No Sidebar', 'winsome' ),
			),
	)
);

// Setting excerpt_length.
$wp_customize->add_setting( 'excerpt_length',
	array(
		'default'           => $default['excerpt_length'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'winsome_sanitize_positive_integer',
	)
);
$wp_customize->add_control( 'excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length', 'winsome' ),
		'description' => esc_html__( 'in words', 'winsome' ),
		'section'     => 'section_layout',
		'type'        => 'number',
		'priority'    => 100,
		'input_attrs' => array( 'min' => 1, 'max' => 200, 'style' => 'width: 55px;' ),
	)
);

// Footer Section.
$wp_customize->add_section( 'section_footer',
	array(
		'title'      => esc_html__( 'Footer Options', 'winsome' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'copyright_text',
	array(
		'default'           => $default['copyright_text'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'winsome' ),
		'section'  => 'section_footer',
		'type'     => 'text',
		'priority' => 100,
	)
);

// Breadcrumb Section.
$wp_customize->add_section( 'section_breadcrumb',
	array(
		'title'      => esc_html__( 'Breadcrumb Options', 'winsome' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting breadcrumb_type.
$wp_customize->add_setting( 'breadcrumb_type',
	array(
		'default'           => $default['breadcrumb_type'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'winsome_sanitize_select',
	)
);
$wp_customize->add_control( 'breadcrumb_type',
	array(
		'label'       => esc_html__( 'Breadcrumb Type', 'winsome' ),
		'section'     => 'section_breadcrumb',
		'type'        => 'radio',
		'priority'    => 100,
		'choices'     => array(
			'disable' => esc_html__( 'Disable', 'winsome' ),
			'simple'  => esc_html__( 'Simple', 'winsome' ),
		),
	)
);

// Slider Section.
$wp_customize->add_section( 'section_slider',
	array(
		'title'      => esc_html__( 'Slider Options', 'winsome' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting slider_status.
$wp_customize->add_setting( 'slider_status',
	array(
		'default'           => $default['slider_status'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'winsome_sanitize_select',
	)
);
$wp_customize->add_control( 'slider_status',
	array(
		'label'       => esc_html__( 'Slider Status', 'winsome' ),
		'section'     => 'section_slider',
		'type'        => 'radio',
		'priority'    => 100,
		'choices'     => array(
			'disable' => esc_html__( 'Disable', 'winsome' ),
			'home'    => esc_html__( 'Multiple Slides', 'winsome' ),
		),
	)
);

// Setting slider excerpt_length.
$wp_customize->add_setting( 'slider_excerpt_length',
	array(
		'default'           => $default['slider_excerpt_length'],
		'sanitize_callback' => 'winsome_sanitize_positive_integer',
	)
);
$wp_customize->add_control( 'slider_excerpt_length',
	array(
		'label'       => __( 'Description Length', 'winsome' ),
		'description' => __( 'Applied to count of words used in description of all slides', 'winsome' ),
		'section'     => 'section_slider',
		'type'        => 'number',
		'priority'    => 100,
		'input_attrs' => array( 'min' => 1, 'max' => 50, 'style' => 'width: 55px;' ),
		'active_callback' 	=> 'winsome_is_featured_slider_active',
	)
);

$slider_number = 5;
for ( $i = 1; $i <= $slider_number; $i++ ) {

	//Slide Details
	$wp_customize->add_setting('slide_'.$i.'_info', 
		array(
			'sanitize_callback' => 'esc_attr',            
		)
	);

	$wp_customize->add_control( 
		new Winsome_Info( 
			$wp_customize, 
			'slide_'.$i.'_info', 
			array(
				'label' 			=> esc_html__( 'Slide ', 'winsome' ) . ' - ' . $i,
				'section' 			=> 'section_slider',
				'priority' 			=> 100,
				'active_callback' 	=> 'winsome_is_featured_slider_active',
			) 
		)
	);

	$wp_customize->add_setting( "slider_page_$i",
		array(
			'sanitize_callback' => 'winsome_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control( "slider_page_$i",
		array(
			'label'           => esc_html__( 'Select Slide', 'winsome' ),
			'section'         => 'section_slider',
			'type'            => 'dropdown-pages',
			'priority'        => 100,
			'active_callback' => 'winsome_is_featured_slider_active',
		)
	); 

	$wp_customize->add_setting( "slider_button_$i",
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control( "slider_button_$i",
		array(
			'label'           => esc_html__( 'Button Text', 'winsome' ),
			'section'         => 'section_slider',
			'type'            => 'text',
			'priority'        => 100,
			'active_callback' => 'winsome_is_featured_slider_active',
		)
	); 

	$wp_customize->add_setting( "slider_url_$i",
		array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( "slider_url_$i",
		array(
			'label'           => esc_html__( 'Button Link', 'winsome' ),
			'section'         => 'section_slider',
			'type'            => 'text',
			'priority'        => 100,
			'active_callback' => 'winsome_is_featured_slider_active',
		)
	);	
}