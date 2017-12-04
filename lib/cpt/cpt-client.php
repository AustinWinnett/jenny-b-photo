<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_client_custom_post_type') ) {

  // Register Custom Post Type
  function register_client_custom_post_type() {

    $labels = array(
      'name'                => 'Client',
      'singular_name'       => 'Client',
      'menu_name'           => 'Client',
      'parent_item_colon'   => 'Parent Client',
      'all_items'           => 'All Clients',
      'view_item'           => 'View Client',
      'add_new_item'        => 'Add New Client',
      'add_new'             => 'New Client',
      'edit_item'           => 'Edit Client',
      'update_item'         => 'Update Client',
      'search_items'        => 'Search Client',
      'not_found'           => 'No client found',
      'not_found_in_trash'  => 'No client found in Trash',
    );
    $args = array(
      'label'               => 'client',
      'description'         => 'Client description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'page-attributes' ),
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
      'has_archive'         => 'clients',
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'client', $args );

  }

// Hook into the 'init' action
add_action( 'init', 'register_client_custom_post_type', 0 );

}
