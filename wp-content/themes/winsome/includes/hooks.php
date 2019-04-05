<?php
/**
 * Load hooks.
 *
 * @package Winsome
 */

//=============================================================
// Doctype hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_doctype_action' ) ) :
    /**
     * Doctype declaration of the theme.
     *
     * @since 1.0.0
     */
    function winsome_doctype_action() {
    ?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
    }
endif;

add_action( 'winsome_doctype', 'winsome_doctype_action', 10 );

//=============================================================
// Head hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_head_action' ) ) :
    /**
     * Header hook of the theme.
     *
     * @since 1.0.0
     */
    function winsome_head_action() {
    ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
    }
endif;

add_action( 'winsome_head', 'winsome_head_action', 10 );

//=============================================================
// Before header hook of the theme
//=============================================================
if ( ! function_exists( 'winsone_before_header_action' ) ) :
    /**
     * Header Start.
     *
     * @since 1.0.0
     */
    function winsone_before_header_action() {

        // Slider status.
        $slider_status  = winsome_get_option( 'slider_status' );
        $header_class   = ( 'disable' === $slider_status ) ? 'slider-disabled' : 'slider-enabled';
        ?><header id="masthead" class="site-header <?php echo $header_class; ?>" role="banner"><div class="container"><?php
    }
endif;

add_action( 'winsone_before_header', 'winsone_before_header_action' );

//=============================================================
// Header main hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_header_action' ) ) :

    /**
     * Site Header.
     *
     * @since 1.0.0
     */
    function winsome_header_action() {
        ?>
    	<div class="site-branding">
    		<?php winsome_the_custom_logo(); ?>

    		<?php $show_title = winsome_get_option( 'show_title' ); ?>

    		<?php if ( true === $show_title ) : ?>
    			<?php /*if ( is_front_page() && is_home() ) : ?>
    				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    			<?php else : ?>
    				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    			<?php endif; */?>
                        <h2 class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
    		<?php endif; ?>

    		<?php
    		$description  = get_bloginfo( 'description', 'display' );
    		$show_tagline = winsome_get_option( 'show_tagline' );
    		?>
    		<?php if ( true === $show_tagline ) : ?>
    			<?php if ( $description || is_customize_preview() ) : ?>
    				<h3 class="site-description hidden"><?php echo $description; /* WPCS: xss ok. */ ?></h3>
    			<?php endif; ?>
    		<?php endif; ?>
    	</div><!-- .site-branding -->
        <div id="main-nav" class="clear-fix">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="wrap-menu-content">
    				<?php
    				wp_nav_menu(
    					array(
    					'theme_location' => 'primary',
    					'menu_id'        => 'primary-menu',
    					'fallback_cb'    => 'winsome_primary_navigation_fallback',
    					)
    				);
    				?>
                </div><!-- .menu-content -->
            </nav><!-- #site-navigation -->
        </div> <!-- #main-nav -->
        <?php
    }

endif;

add_action( 'winsome_header', 'winsome_header_action' );

//=============================================================
// After header hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_after_header_action' ) ) :
    /**
     * Header End.
     *
     * @since 1.0.0
     */
    function winsome_after_header_action() {
       
    ?></div><!-- .container --></header><!-- #masthead --><?php
    }
endif;
add_action( 'winsome_after_header', 'winsome_after_header_action' );

//=============================================================
// Slider hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_main_content_for_slider' ) ) :

    /**
     * Add slider.
     *
     * @since 1.0.0
     */
    function winsome_main_content_for_slider() {

        get_template_part( 'template-parts/slider' );

    }

endif;

add_action( 'winsome_main_content', 'winsome_main_content_for_slider' , 5 );

//=============================================================
// Breadcrumb hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_main_content_for_breadcrumb' ) ) :

    /**
     * Add breadcrumb.
     *
     * @since 1.0.0
     */
    function winsome_main_content_for_breadcrumb() {

        get_template_part( 'template-parts/breadcrumbs' );

    }

endif;

add_action( 'winsome_main_content', 'winsome_main_content_for_breadcrumb' , 7 );

//=============================================================
// Home widget hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_main_content_for_home_widgets' ) ) :

    /**
     * Add home widgets.
     *
     * @since 1.0.0
     */
    function winsome_main_content_for_home_widgets() {

        get_template_part( 'template-parts/home-widgets' );

    }

endif;

add_action( 'winsome_main_content', 'winsome_main_content_for_home_widgets' , 9 );

//=============================================================
// Before content hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_before_content_action' ) ) :
    /**
     * Content Start.
     *
     * @since 1.0.0
     */
    function winsome_before_content_action() {
    ?><div id="content" class="site-content"><div class="container"><div class="inner-wrapper"><?php
    }
endif;
add_action( 'winsome_before_content', 'winsome_before_content_action' );

//=============================================================
// After content hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_after_content_action' ) ) :
    /**
     * Content End.
     *
     * @since 1.0.0
     */
    function winsome_after_content_action() {
    ?></div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content --><?php    
    }
endif;
add_action( 'winsome_after_content', 'winsome_after_content_action' );

//=============================================================
// Credit info hook of the theme
//=============================================================
if ( ! function_exists( 'winsome_credit_info' ) ) :

    function winsome_credit_info(){ ?> 

        <div class="site-info">
            <?php printf( esc_html__( '%1$s by %2$s', 'winsome' ), 'Winsome', '<a href="https://www.prodesigns.com" rel="designer">ProDesigns</a>' ); ?>
        </div><!-- .site-info -->
        
        <?php
    }

endif;

add_action( 'winsome_credit', 'winsome_credit_info', 10 );

