<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Winsome
 */

?>
<?php
	/**
	 * Hook - winsome_doctype.
	 *
	 * @hooked winsome_doctype_action - 10
	 */
	do_action( 'winsome_doctype' );
?>
<head>
	<?php
		/**
		 * Hook - winsome_head.
		 *
		 * @hooked winsome_head_action - 10
		 */
		do_action( 'winsome_head' );
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php
	  /**
	   * Hook - winsone_before_header.
	   *
	   * @hooked winsome_before_header_action - 10
	   */
	  do_action( 'winsone_before_header' );
	?>

	<?php
		/**
		 * Hook - winsome_header.
		 *
		 * @hooked winsome_header_action - 10
		 */
		do_action( 'winsome_header' );
	?>
	<?php
	  /**
	   * Hook - winsome_after_header.
	   *
	   * @hooked winsome_after_header_action - 10
	   */
	  do_action( 'winsome_after_header' );
	?>

	<?php
	/**
	 * Hook - winsome_main_content.
	 *
	 * @hooked winsome_main_content_for_slider - 5
	 * @hooked winsome_main_content_for_breadcrumb - 7
	 * @hooked winsome_main_content_for_home_widgets - 9
	 */
	do_action( 'winsome_main_content' );
	?>

	<?php
	/**
	 * Hook - winsome_before_content.
	 *
	 * @hooked winsome_before_content_action - 10
	 */
	do_action( 'winsome_before_content' );
	?>
