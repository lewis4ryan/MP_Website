<?php
/**
 * Winsome functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Winsome
 */

if ( ! function_exists( 'winsome_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function winsome_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Winsome, use a find and replace
	 * to change 'winsome' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'winsome' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 */
	add_theme_support( 'custom-logo' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('winsome-large', 570, 380, true);

	// Register navigation menu locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'winsome' ),
		'social'  => esc_html__( 'Social', 'winsome' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'winsome_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'winsome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function winsome_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'winsome_content_width', 810 );
}
add_action( 'after_setup_theme', 'winsome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function winsome_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'winsome' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in Sidebar.', 'winsome' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Home Page Widget Area', 'winsome' ),
		'id'            => 'home-page-widget-area',
		'description'   => esc_html__( 'Add widgets here to appear in Home Page Widget Area.', 'winsome' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="container">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'winsome' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'winsome' ), 2 ),
		'id'            => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'winsome' ), 3 ),
		'id'            => 'footer-3',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'winsome' ), 4 ),
		'id'            => 'footer-4',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'winsome_widgets_init' );

/**
* Enqueue scripts and styles.
*/
function winsome_scripts() {
	wp_enqueue_style( 'winsome-fonts', winsome_fonts_url(), array(), null );

	wp_enqueue_style( 'jquery-meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/meanmenu.css' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/third-party/font-awesome/css/font-awesome.min.css', '', '4.7.0' );

	wp_enqueue_style( 'jquery-owl-carousel', get_template_directory_uri() . '/assets/third-party/owl-carousel/lib/owl.carousel.css', '2.0.0' );	

	wp_enqueue_style( 'winsome-style', get_stylesheet_uri() );

	wp_enqueue_script( 'winsome-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'winsome-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri() . '/assets/third-party/owl-carousel/lib/owl.carousel.js', array('jquery'), '2.0.0', true );

	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/assets/third-party/counter-up/jquery.waypoints.min.js', array('jquery'), '4.0.1', true );

	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/third-party/counter-up/jquery.counterup.min.js', array('jquery-waypoints'), '2.0.5', true );

	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/jquery.meanmenu.js', array('jquery'), '2.0.2', true );

	wp_enqueue_script( 'winsome-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0.3', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'winsome_scripts' );

/**
* Enqueue scripts and styles for admin >> widget page only.
*/
function winsome_admin_scripts( $hook ) {

	if( 'widgets.php' === $hook ){

		wp_enqueue_style( 'winsome-admin', get_template_directory_uri() . '/includes/widgets/css/admin.css', array(), '1.0.3' );

		wp_enqueue_media();

		wp_enqueue_script( 'winsome-admin', get_template_directory_uri() . '/includes/widgets/js/admin.js', array( 'jquery' ), '1.0.3' );

	}

}

add_action( 'admin_enqueue_scripts', 'winsome_admin_scripts' );

// Load main file.
require_once trailingslashit( get_template_directory() ) . '/includes/main.php';


/* Turn on wide images */
add_theme_support( 'align-wide' );
add_filter('use_block_editor_for_post', '__return_false');