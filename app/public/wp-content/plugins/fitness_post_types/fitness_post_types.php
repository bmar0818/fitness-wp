<?php 
    /*
        Plugin Name: Fitnnes - Post Types
        Plugin URI:
        Description: Adds a new post into Wordpress
        Version: 1.0
        Author: Brianna Martin
        Author URI:
        Text Domain: fitness
    */

    if(!defined('ABSPATH')) die();

    // Register new Custom Post Type
	function fitness_class_post_type() {

		$labels = array(
			'name'                  => _x( 'Classes', 'Post Type General Name', 'fitness' ),
			'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'fitness' ),
			'menu_name'             => __( 'Classes', 'fitness' ),
			'name_admin_bar'        => __( 'Classes', 'fitness' ),
			'archives'              => __( 'Archive', 'fitness' ),
			'attributes'            => __( 'Attributes', 'fitness' ),
			'parent_item_colon'     => __( 'Parent Class', 'fitness' ),
			'all_items'             => __( 'All Classes', 'fitness' ),
			'add_new_item'          => __( 'Add Class', 'fitness' ),
			'add_new'               => __( 'Add Class', 'fitness' ),
			'new_item'              => __( 'New Class', 'fitness' ),
			'edit_item'             => __( 'Edit Class', 'fitness' ),
			'update_item'           => __( 'Update Class', 'fitness' ),
			'view_item'             => __( 'View Class', 'fitness' ),
			'view_items'            => __( 'View Class', 'fitness' ),
			'search_items'          => __( 'Search Class', 'fitness' ),
			'not_found'             => __( 'Not found', 'fitness' ),
			'not_found_in_trash'    => __( 'Not found in trash', 'fitness' ),
			'featured_image'        => __( 'Featured Image', 'fitness' ),
			'set_featured_image'    => __( 'Save Featured Image', 'fitness' ),
			'remove_featured_image' => __( 'Remove Featured Image', 'fitness' ),
			'use_featured_image'    => __( 'Use as Featured Image', 'fitness' ),
			'insert_into_item'      => __( 'Insert in Class', 'fitness' ),
			'uploaded_to_this_item' => __( 'Add in Class', 'fitness' ),
			'items_list'            => __( 'Classes List', 'fitness' ),
			'items_list_navigation' => __( 'Navigate to Classes', 'fitness' ),
			'filter_items_list'     => __( 'Filter Classes', 'fitness' ),
		);
		$args = array(
			'label'                 => __( 'Class', 'fitness' ),
			'description'           => __( 'Classes for Fitness Website', 'fitness' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 6,
			'menu_icon'             => 'dashicons-welcome-learn-more',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'fitness_classes', $args );

	}
	add_action( 'init', 'fitness_class_post_type', 0 );

	//Register post types for testimonials
	function gymfitness_testimonials() {

		$labels = array(
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'gymfitness' ),
			'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
			'menu_name'             => __( 'Testimonials', 'gymfitness' ),
			'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
			'archives'              => __( 'Archive', 'gymfitness' ),
			'attributes'            => __( 'Attributes', 'gymfitness' ),
			'parent_item_colon'     => __( 'Parent Testimonial ', 'gymfitness' ),
			'all_items'             => __( 'All Testimonials', 'gymfitness' ),
			'add_new_item'          => __( 'Add Testimonial', 'gymfitness' ),
			'add_new'               => __( 'Add Testimonial', 'gymfitness' ),
			'new_item'              => __( 'New Testimonial', 'gymfitness' ),
			'edit_item'             => __( 'Edit Testimonial', 'gymfitness' ),
			'update_item'           => __( 'Update Testimonial', 'gymfitness' ),
			'view_item'             => __( 'View Testimonial', 'gymfitness' ),
			'view_items'            => __( 'View Testimonials', 'gymfitness' ),
			'search_items'          => __( 'Search Testimonial', 'gymfitness' ),
			'not_found'             => __( 'Not found in Trash', 'gymfitness' ),
			'featured_image'        => __( 'Featured Image', 'gymfitness' ),
			'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
			'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
			'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
			'insert_into_item'      => __( 'Insert Into Testimonial', 'gymfitness' ),
			'uploaded_to_this_item' => __( 'Add At Testimonial', 'gymfitness' ),
			'items_list'            => __( 'Testimonial List', 'gymfitness' ),
			'items_list_navigation' => __( 'Navigate toTestimonials', 'gymfitness' ),
			'filter_items_list'     => __( 'Filter Testimonials', 'gymfitness' ),
		);
		$args = array(
			'label'                 => __( 'Testimonials', 'gymfitness' ),
			'description'           => __( 'Testimonials para el Sitio Web', 'gymfitness' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 8,
			'menu_icon'             => 'dashicons-editor-quote',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'testimonials', $args );
	
	}
	add_action( 'init', 'gymfitness_testimonials', 0 );
?>