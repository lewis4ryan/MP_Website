<?php
/**
 * About configuration
 *
 * @package Winsome
 */

$config = array(
	'menu_name' => esc_html__( 'About Winsome', 'winsome' ),
	'page_name' => esc_html__( 'About Winsome', 'winsome' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'winsome' ), 'Winsome' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'winsome' ), 'Winsome' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','winsome' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/downloads/winsome/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','winsome' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/demo/winsome/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','winsome' ),
			'url'    => 'https://www.prodesigns.com/wordpress-themes/documentation/winsome/',
			'button' => 'primary',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','winsome' ),
			'url'  => 'https://wordpress.org/support/theme/winsome/reviews/',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'winsome' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'winsome' ),
		'support'             => esc_html__( 'Support', 'winsome' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to Pro', 'winsome' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'winsome' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'winsome' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'winsome' ),
			'button_label'        => esc_html__( 'View documentation', 'winsome' ),
			'button_link'         => 'https://www.prodesigns.com/wordpress-themes/documentation/winsome/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'winsome' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'winsome' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'winsome' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=winsome-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'winsome' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'winsome' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'winsome' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			
			'front-page' => array(
				'title'       => esc_html__( 'Setting Static Front Page','winsome' ),
				'description' => esc_html__( 'Create a new page to display on front page ( Ex: Home ) and assign "Home" template. Select A static page then Front page and Posts page to display front page specific sections. Note: Static page will be set automatically when you import demo content.', 'winsome' ),
				'id'          => 'front-page',
				'check'       => ( 'page' === get_option( 'show_on_front' ) ) ? true : false,
				'help'        => '<a href="' . esc_url( wp_customize_url() ) . '?autofocus[section]=static_front_page" class="button button-secondary">' . esc_html__( 'Static Front Page', 'winsome' ) . '</a>',
			),

			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'winsome' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'winsome' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'winsome' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'winsome' ),
			'button_label' => esc_html__( 'Contact Support', 'winsome' ),
			'button_link'  => esc_url( 'https://www.prodesigns.com/wordpress-themes/support/item/winsome/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'winsome' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'winsome' ),
			'button_label' => esc_html__( 'View Documentation', 'winsome' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/documentation/winsome/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
			'title'        => esc_html__( 'Pro Version', 'winsome' ),
			'icon'         => 'dashicons dashicons-products',
			'icon'         => 'dashicons dashicons-star-filled',
			'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'winsome' ),
			'button_label' => esc_html__( 'View Pro Version', 'winsome' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/downloads/winsome-pro/',
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Youtube Video Tutorials', 'winsome' ),
			'icon'         => 'dashicons dashicons-video-alt3',
			'text'         => esc_html__( 'Please check our youtube channel for video instructions of Winsome setup and customization.', 'winsome' ),
			'button_label' => esc_html__( 'Video Tutorials', 'winsome' ),
			'button_link'  => 'https://www.youtube.com/playlist?list=PL-Ic437QwxQ8YFtxfEA0bEfp85aszBkp5',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Customization Request', 'winsome' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'winsome' ),
			'button_label' => esc_html__( 'Customization Request', 'winsome' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/contact-us/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(
			'title'        => esc_html__( 'Child Theme', 'winsome' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'winsome' ),
			'button_label' => esc_html__( 'About child theme', 'winsome' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
	),

	// Upgrade.
	'upgrade_to_pro' 	=> array(
		'description'   => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'winsome' ),
		'button_label' 	=> esc_html__( 'Upgrade to Pro', 'winsome' ),
		'button_link'  	=> 'https://www.prodesigns.com/wordpress-themes/downloads/winsome-pro/',
		'is_new_tab'   	=> true,
	),

    // Free vs pro array.
    'free_pro' => array(
	    
	    array(
		    'title'     => esc_html__( 'Google Fonts', 'winsome' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'winsome' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','winsome'),
	    ),
	    array(
		    'title'     => esc_html__( 'Color Options', 'winsome' ),
		    'desc'      => esc_html__( 'Options to change primary color of the site', 'winsome' ),
		    'free'      => esc_html__('no','winsome'),
		    'pro'       => esc_html__('yes','winsome'),
	    ),
        array(
    	    'title'     => esc_html__( 'Hide Footer Credit', 'winsome' ),
    	    'desc'      => esc_html__( 'Option to enable/disable Powerby(Designer) credit in footer', 'winsome' ),
    	    'free'      => esc_html__('no','winsome'),
    	    'pro'       => esc_html__('yes','winsome'),
        ),
        array(
    	    'title'     => esc_html__( 'Override Footer Credit', 'winsome' ),
    	    'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'winsome' ),
    	    'free'      => esc_html__('no','winsome'),
    	    'pro'       => esc_html__('yes','winsome'),
        ),
	    array(
		    'title'     => esc_html__( 'SEO', 'winsome' ),
		    'desc' 		=> esc_html__( 'Developed with high skilled SEO tools.', 'winsome' ),
		    'free'  	=> 'yes',
		    'pro'   	=> 'yes',
	    ),
	    array(
		    'title'     => esc_html__( 'Support Forum', 'winsome' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'winsome' ),
		    'free'      => esc_html__('yes', 'winsome'),
		    'pro'       => esc_html__('High Priority', 'winsome'),
	    )

    ),

);
Winsome_About::init( apply_filters( 'winsome_about_filter', $config ) );
