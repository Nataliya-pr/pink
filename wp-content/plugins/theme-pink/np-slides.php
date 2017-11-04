<?php

/*
Plugin Name: np-slides Plugin by Nataliya
Plugin URI: https://np-slides.com/
Description: carousel Plugin for theme
Version: 1.0
Author: Nataliya
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: np-slides
*/


add_action( 'init', 'np_add_slides', 0 );

function np_add_slides() {

    $labels = array(
      'name'                  => _x( 'Slides', 'Post Type General Name', 'np-slides' ),
      'singular_name'         => _x( 'Slides', 'Post Type Singular Name', 'np-slides' ),
      'menu_name'             => __( 'Slides', 'np-slides' ),
      'name_admin_bar'        => __( 'Post Type', 'np-slides' ),
      'archives'              => __( 'Item Archives', 'np-slides' ),
      'attributes'            => __( 'Item Attributes', 'np-slides' ),
      'parent_item_colon'     => __( 'Parent Item:', 'np-slides' ),
      'all_items'             => __( 'All Items', 'np-slides' ),
      'add_new_item'          => __( 'Add New Item', 'np-slides' ),
      'add_new'               => __( 'Add New', 'np-slides' ),
      'new_item'              => __( 'New Item', 'np-slides' ),
      'edit_item'             => __( 'Edit Item', 'np-slides' ),
      'update_item'           => __( 'Update Item', 'np-slides' ),
      'view_item'             => __( 'View Item', 'np-slides' ),
      'view_items'            => __( 'View Items', 'np-slides' ),
      'search_items'          => __( 'Search Item', 'np-slides' ),
      'not_found'             => __( 'Not found', 'np-slides' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'np-slides' ),
      'featured_image'        => __( 'Featured Image', 'np-slides' ),
      'set_featured_image'    => __( 'Set featured image', 'np-slides' ),
      'remove_featured_image' => __( 'Remove featured image', 'np-slides' ),
      'use_featured_image'    => __( 'Use as featured image', 'np-slides' ),
      'insert_into_item'      => __( 'Insert into item', 'np-slides' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'np-slides' ),
      'items_list'            => __( 'Items list', 'np-slides' ),
      'items_list_navigation' => __( 'Items list navigation', 'np-slides' ),
      'filter_items_list'     => __( 'Filter items list', 'np-slides' ),
    );
    $args = array(
        'label'                 => __( 'Slides', 'np-slides' ),
        'description'           => __( 'My work samples', 'np-slides' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false,

    );
    register_post_type( 'np_slides', $args );

}
