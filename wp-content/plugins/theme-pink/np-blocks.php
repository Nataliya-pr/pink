<?php

/*
Plugin Name: np-blocks Plugin by Nataliya
Plugin URI: https://np-blocks.com/
Description: block Plugin for theme
Version: 1.0
Author: Nataliya
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: np-blocks
*/


add_action( 'init', 'np_add_blocks', 0 );

function np_add_blocks() {

    $labels = array(
      'name'                  => _x( 'Blocks', 'Post Type General Name', 'np-blocks' ),
      'singular_name'         => _x( 'Blocks', 'Post Type Singular Name', 'np-blocks' ),
      'menu_name'             => __( 'Blocks', 'np-blocks' ),
      'name_admin_bar'        => __( 'Post Type', 'np-blocks' ),
      'archives'              => __( 'Item Archives', 'np-blocks' ),
      'attributes'            => __( 'Item Attributes', 'np-blocks' ),
      'parent_item_colon'     => __( 'Parent Item:', 'np-blocks' ),
      'all_items'             => __( 'All Items', 'np-blocks' ),
      'add_new_item'          => __( 'Add New Item', 'np-blocks' ),
      'add_new'               => __( 'Add New', 'np-blocks' ),
      'new_item'              => __( 'New Item', 'np-blocks' ),
      'edit_item'             => __( 'Edit Item', 'np-blocks' ),
      'update_item'           => __( 'Update Item', 'np-blocks' ),
      'view_item'             => __( 'View Item', 'np-blocks' ),
      'view_items'            => __( 'View Items', 'np-blocks' ),
      'search_items'          => __( 'Search Item', 'np-blocks' ),
      'not_found'             => __( 'Not found', 'np-blocks' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'np-blocks' ),
      'featured_image'        => __( 'Featured Image', 'np-blocks' ),
      'set_featured_image'    => __( 'Set featured image', 'np-blocks' ),
      'remove_featured_image' => __( 'Remove featured image', 'np-blocks' ),
      'use_featured_image'    => __( 'Use as featured image', 'np-blocks' ),
      'insert_into_item'      => __( 'Insert into item', 'np-blocks' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'np-blocks' ),
      'items_list'            => __( 'Items list', 'np-blocks' ),
      'items_list_navigation' => __( 'Items list navigation', 'np-blocks' ),
      'filter_items_list'     => __( 'Filter items list', 'np-blocks' ),
    );
    $args = array(
        'label'                 => __( 'Blocks', 'np-blocks' ),
        'description'           => __( 'My work samples', 'np-blocks' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-screenoptions',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false,

    );
    register_post_type( 'np_blocks', $args );

}
