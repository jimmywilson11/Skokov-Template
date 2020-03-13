<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}
function sitelogo()
{
	$output = '';
	$output .= '<a class="navbar-brand" aria-label="home" href="' . get_home_url() . '">';
	$custom_logo_id = get_theme_mod('custom_logo');
	$custom_logo_attr = '';
	if ($custom_logo_id) {
		$custom_logo_attr = array(
			'class' => 'custom-logo',
		);
		$image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
		if (empty($image_alt)) {
			$custom_logo_attr['alt'] = get_bloginfo('name', 'display');
		}
	}
	$output .= wp_get_attachment_image($custom_logo_id, 'full', 'false', $custom_logo_attr) . '</a>';
	echo $output;
}

add_action( 'after_setup_theme', 
function()
	{
		register_nav_menus ([
			'footer_menu' => 'Footer Menu'
		]);
	} 
);

function register_clients_post_type() {
	$labels = array(
		'name'               => _x( 'Clients', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Client', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Clients', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Client', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Client', 'client', 'understrap' ),
		'add_new_item'       => __( 'Add New Client', 'understrap' ),
		'new_item'           => __( 'New Client', 'understrap' ),
		'edit_item'          => __( 'Edit Client', 'understrap' ),
		'view_item'          => __( 'View Client', 'understrap' ),
		'all_items'          => __( 'All Clients', 'understrap' ),
		'search_items'       => __( 'Search Clients', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Clients:', 'understrap' ),
		'not_found'          => __( 'No Clients found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Clients found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Our clients.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'client' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail',),
		'menu_icon'			 => 'dashicons-buddicons-buddypress-logo'
	);

	register_post_type( 'clients', $args );
}
add_action( 'init', 'register_clients_post_type' );

function register_specialization_post_type() {
	$labels = array(
		'name'               => _x( 'Specializations', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Specialization', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Specializations', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Specialization', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Specialization', 'client', 'understrap' ),
		'add_new_item'       => __( 'Add New Specialization', 'understrap' ),
		'new_item'           => __( 'New Specialization', 'understrap' ),
		'edit_item'          => __( 'Edit Specialization', 'understrap' ),
		'view_item'          => __( 'View Specialization', 'understrap' ),
		'all_items'          => __( 'All Specializations', 'understrap' ),
		'search_items'       => __( 'Search Specializations', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Specialization:', 'understrap' ),
		'not_found'          => __( 'No Specialization found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Specialization found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Our Specializations.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Specialization' ),
		'taxonomies'         => array ( 'direction' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor'),
		'menu_icon'			 => 'dashicons-grid-view'	
	);

	register_post_type( 'specializations', $args );
}
add_action( 'init', 'register_specialization_post_type' );


add_action( 'init', 'create_taxonomy' );

function create_taxonomy(){
	register_taxonomy( 'direction', [ 'specializations' ], [ 
		'label'                 => __( 'Direction', 'understrap' ),
		'labels'                => [
			'singular_name'     => 'Direction',
			'search_items'      => 'Search Direction',
			'all_items'         => 'All Directions',
			'view_item '        => 'View Direction',
			'parent_item'       => 'Parent Direction',
			'parent_item_colon' => 'Parent Direction:',
			'edit_item'         => 'Edit Direction',
			'update_item'       => 'Update Direction',
			'add_new_item'      => 'Add New Direction',
			'new_item_name'     => 'New Genre Direction',
			'menu_name'         => 'Direction',	
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => false,
		'rewrite'               => true,
		'capabilities'          => array(),
	]);
}

function register_portfolio_post_type() {
	$labels = array(
		'name'               => _x( 'Portfolio Work', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Portfolio Work', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Portfolio Works', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Portfolio WorkS', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New work in Portfolio', 'client', 'understrap' ),
		'add_new_item'       => __( 'Add New work in Portfolio', 'understrap' ),
		'new_item'           => __( 'New work in Portfolio', 'understrap' ),
		'edit_item'          => __( 'Edit work in Portfolio', 'understrap' ),
		'view_item'          => __( 'View work in Portfolio', 'understrap' ),
		'all_items'          => __( 'All works in Portfolio', 'understrap' ),
		'search_items'       => __( 'Search work in portfolio', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Portfolio:', 'understrap' ),
		'not_found'          => __( 'No work in Portfolio found.', 'understrap' ),
		'not_found_in_trash' => __( 'No work in Portfolio found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Our Portfolio', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'taxonomies'         => array ( '' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail'),
		'menu_icon'			 => 'dashicons-schedule'
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_portfolio_post_type' );

function isacustom_excerpt_length($length) {
	global $post;
	if ($post->post_type == 'post')
	return 55;
	else if ($post->post_type == 'specializations')
	return 8;
	else
	return 80;
	}
add_filter('excerpt_length', 'isacustom_excerpt_length');
		
function trim_excerpt($text)
{
return str_replace(' [...]', '', $text);
}
add_filter('get_the_excerpt', 'trim_excerpt');


add_filter('widget_tag_cloud_args','set_tag_cloud_args');
function set_tag_cloud_args( $args ) {
	$args['number'] = 30;
	$args['largest'] = 18;
	$args['smallest'] = 11;
	$args['unit'] = 'px';
	return $args;
}