<?php

/*
 * Plugin Name:       WP Test Plugin
 * Plugin URI:        https://wordpress.org/plugins/wp-test-plugin/
 * Description:       WP test Plugin is wordpress plugin for learning and testing plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Sadrul Hossain
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wptp
 */

/**
 * wptp enqueue styles
 */
function wptp_enqueue_styles() {
	wp_enqueue_style( 'owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css' );
	wp_enqueue_style( 'custom',  plugins_url( 'css/custom.css', __FILE__ ));
}
add_action( 'wp_enqueue_scripts', 'wptp_enqueue_styles' );

/**
 * wptp enqueue scripts
 */
function wptp_enqueue_scripts() {
	wp_enqueue_script( 'jquery-min', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel-min', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom', plugins_url( 'js/custom.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wptp_enqueue_scripts' );
/**
 * wptp review function
 */
if(!function_exists('wptp_review')){

	// Register Custom Post Type
	function wptp_review() {
	
		$labels = array(
			'name'                  => _x( 'Reviews', 'Post Type General Name', 'wptp' ),
			'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'wptp' ),
			'menu_name'             => __( 'Reviews', 'wptp' ),
			'name_admin_bar'        => __( 'Post Type', 'wptp' ),
			'archives'              => __( 'Item Archives', 'wptp' ),
			'attributes'            => __( 'Item Attributes', 'wptp' ),
			'parent_item_colon'     => __( 'Parent Item:', 'wptp' ),
			'all_items'             => __( 'All Items', 'wptp' ),
			'add_new_item'          => __( 'Add New Item', 'wptp' ),
			'add_new'               => __( 'Add New', 'wptp' ),
			'new_item'              => __( 'New Item', 'wptp' ),
			'edit_item'             => __( 'Edit Item', 'wptp' ),
			'update_item'           => __( 'Update Item', 'wptp' ),
			'view_item'             => __( 'View Item', 'wptp' ),
			'view_items'            => __( 'View Items', 'wptp' ),
			'search_items'          => __( 'Search Item', 'wptp' ),
			'not_found'             => __( 'Not found', 'wptp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wptp' ),
			'featured_image'        => __( 'Featured Image', 'wptp' ),
			'set_featured_image'    => __( 'Set featured image', 'wptp' ),
			'remove_featured_image' => __( 'Remove featured image', 'wptp' ),
			'use_featured_image'    => __( 'Use as featured image', 'wptp' ),
			'insert_into_item'      => __( 'Insert into item', 'wptp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'wptp' ),
			'items_list'            => __( 'Items list', 'wptp' ),
			'items_list_navigation' => __( 'Items list navigation', 'wptp' ),
			'filter_items_list'     => __( 'Filter items list', 'wptp' ),
		);
		$args = array(
			'label'                 => __( 'Review', 'wptp' ),
			'description'           => __( 'Review Description', 'wptp' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'test_review', $args );
	
	}
	add_action( 'init', 'wptp_review', 0 );
}