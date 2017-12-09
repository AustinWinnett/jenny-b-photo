<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_gallery_custom_post_type') ) {

  // Register Custom Post Type
  function register_gallery_custom_post_type() {

    $labels = array(
      'name'                => 'Gallery',
      'singular_name'       => 'Gallery',
      'menu_name'           => 'Client Galleries',
      'parent_item_colon'   => 'Parent Gallery',
      'all_items'           => 'All Galleries',
      'view_item'           => 'View Gallery',
      'add_new_item'        => 'Add New Gallery',
      'add_new'             => 'New Gallery',
      'edit_item'           => 'Edit Gallery',
      'update_item'         => 'Update Gallery',
      'search_items'        => 'Search Gallery',
      'not_found'           => 'No gallery found',
      'not_found_in_trash'  => 'No gallery found in Trash',
    );
    $args = array(
      'label'               => 'gallery',
      'description'         => 'Gallery description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'thumbnail' ),
      // 'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => false,
      'show_in_admin_bar'   => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-groups',
      'can_export'          => true,
      'has_archive'         => 'galleries',
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'gallery', $args );

  }

// Hook into the 'init' action
add_action( 'init', 'register_gallery_custom_post_type', 0 );

}
