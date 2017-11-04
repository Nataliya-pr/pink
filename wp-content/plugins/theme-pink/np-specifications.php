<?php

/*
Plugin Name: np-specifications Plugin by Nataliya
Plugin URI: https://np-specifications.com/
Description: specification Plugin for theme
Version: 1.0
Author: Nataliya
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: np-specifications
*/


add_action( 'init', 'np_add_specifications', 0 );

function np_add_specifications() {

    $labels = array(
      'name'                  => _x( 'Specifications', 'Post Type General Name', 'np-specifications' ),
      'singular_name'         => _x( 'Specifications', 'Post Type Singular Name', 'np-specifications' ),
      'menu_name'             => __( 'Specifications', 'np-specifications' ),
      'name_admin_bar'        => __( 'Post Type', 'np-specifications' ),
      'archives'              => __( 'Item Archives', 'np-specifications' ),
      'attributes'            => __( 'Item Attributes', 'np-specifications' ),
      'parent_item_colon'     => __( 'Parent Item:', 'np-specifications' ),
      'all_items'             => __( 'All Items', 'np-specifications' ),
      'add_new_item'          => __( 'Add New Item', 'np-specifications' ),
      'add_new'               => __( 'Add New', 'np-specifications' ),
      'new_item'              => __( 'New Item', 'np-specifications' ),
      'edit_item'             => __( 'Edit Item', 'np-specifications' ),
      'update_item'           => __( 'Update Item', 'np-specifications' ),
      'view_item'             => __( 'View Item', 'np-specifications' ),
      'view_items'            => __( 'View Items', 'np-specifications' ),
      'search_items'          => __( 'Search Item', 'np-specifications' ),
      'not_found'             => __( 'Not found', 'np-specifications' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'np-specifications' ),
      'featured_image'        => __( 'Featured Image', 'np-specifications' ),
      'set_featured_image'    => __( 'Set featured image', 'np-specifications' ),
      'remove_featured_image' => __( 'Remove featured image', 'np-specifications' ),
      'use_featured_image'    => __( 'Use as featured image', 'np-specifications' ),
      'insert_into_item'      => __( 'Insert into item', 'np-specifications' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'np-specifications' ),
      'items_list'            => __( 'Items list', 'np-specifications' ),
      'items_list_navigation' => __( 'Items list navigation', 'np-specifications' ),
      'filter_items_list'     => __( 'Filter items list', 'np-specifications' ),
    );
    $args = array(
        'label'                 => __( 'Specifications', 'np-specifications' ),
        'description'           => __( 'My work samples', 'np-specifications' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-media-spreadsheet',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false,

    );
    register_post_type( 'np_specifications', $args );

}
