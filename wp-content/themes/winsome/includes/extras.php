<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Winsome
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function winsome_body_classes( $classes ) {

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class for global layout.
	$global_layout = winsome_get_option( 'global_layout' );
	$global_layout = apply_filters( 'winsome_filter_theme_global_layout', $global_layout );
	$classes[] = 'global-layout-' . esc_attr( $global_layout );

	return $classes;
}
add_filter( 'body_class', 'winsome_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function winsome_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'winsome_pingback_header' );

if ( ! function_exists( 'winsome_footer_goto_top' ) ) :

	/**
	 * Add Go to top.
	 *
	 * @since 1.0.0
	 */
	function winsome_footer_goto_top() {
		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"></i></a>';
	}
endif;
add_action( 'wp_footer', 'winsome_footer_goto_top' );

if ( ! function_exists( 'winsome_implement_excerpt_length' ) ) :

	/**
	 * Implement excerpt length.
	 *
	 * @since 1.0.0
	 *
	 * @param int $length The number of words.
	 * @return int Excerpt length.
	 */
	function winsome_implement_excerpt_length( $length ) {

		$excerpt_length = winsome_get_option( 'excerpt_length' );
		if ( absint( $excerpt_length ) > 0 ) {
			$length = absint( $excerpt_length );
		}
		return $length;

	}
endif;

if ( ! function_exists( 'winsome_content_more_link' ) ) :

	/**
	 * Implement read more in content.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more_link Read More link element.
	 * @param string $more_link_text Read More text.
	 * @return string Link.
	 */
	function winsome_content_more_link( $more_link, $more_link_text ) {

		$read_more_text = winsome_get_option( 'read_more_text' );
		if ( ! empty( $read_more_text ) ) {
			$more_link = str_replace( $more_link_text, $read_more_text, $more_link );
		}
		return $more_link;

	}

endif;

if ( ! function_exists( 'winsome_implement_read_more' ) ) :

	/**
	 * Implement read more in excerpt.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more The string shown within the more link.
	 * @return string The excerpt.
	 */
	function winsome_implement_read_more( $more ) {
		$output = $more;
		$read_more_text = winsome_get_option( 'read_more_text' );
		if ( ! empty( $read_more_text ) ) {
			$output = '&hellip;';
		}
		return $output;

	}
endif;

if ( ! function_exists( 'winsome_hook_read_more_filters' ) ) :

	/**
	 * Hook read more and excerpt length filters.
	 *
	 * @since 1.0.0
	 */
	function winsome_hook_read_more_filters() {
		if ( is_home() || is_category() || is_tag() || is_author() || is_date() || is_search() ) {

			add_filter( 'excerpt_length', 'winsome_implement_excerpt_length', 999 );
			add_filter( 'the_content_more_link', 'winsome_content_more_link', 10, 2 );
			add_filter( 'excerpt_more', 'winsome_implement_read_more' );

		}
	}
endif;
add_action( 'wp', 'winsome_hook_read_more_filters' );

if ( ! function_exists( 'winsome_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function winsome_add_sidebar() {

		$global_layout = winsome_get_option( 'global_layout' );
		$global_layout = apply_filters( 'winsome_filter_theme_global_layout', $global_layout );

		// Include sidebar.
		if ( 'no-sidebar' !== $global_layout ) {
			get_sidebar();
		}

	}
endif;
add_action( 'winsome_action_sidebar', 'winsome_add_sidebar' );

function winsome_register_required_plugins() {
	
	$plugins = array(
				
		array(
			'name'      => esc_html__( 'PT Theme Addon', 'winsome' ),
			'slug'      => 'pt-theme-addon',
			'required'  => false,
		),

		array(
			'name'      => esc_html__( 'Contact Form 7', 'winsome' ),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

	);

	tgmpa( $plugins );
}

add_action( 'tgmpa_register', 'winsome_register_required_plugins' );