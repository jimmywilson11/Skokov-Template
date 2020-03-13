<?php
/**
 * UnderStrap enqueue scripts
 * @package understrap
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'understrap-owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null);
		wp_enqueue_style( 'understrap-owl-def', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), null);
		
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'https://code.jquery.com/jquery-3.4.1.min.js' ), false, null, );
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'imagesloaded', ( '="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js' ), false, null, );
		wp_enqueue_script( 'imagesloaded' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_script('understrap-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), null, true);
		wp_enqueue_script('understrap-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);
		wp_enqueue_script('understrap-custom', get_template_directory_uri() . '/js/custom.js', array(), null, true);
		wp_enqueue_script('understrap-map', get_template_directory_uri() . '/js/map.js', array(), null, true);
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

