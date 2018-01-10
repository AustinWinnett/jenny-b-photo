<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_resource_custom_post_type') ) {

  // Register Custom Post Type
  function register_resource_custom_post_type() {

    $labels = array(
      'name'                => 'Resource',
      'singular_name'       => 'Resource',
      'menu_name'           => 'For Photographers Posts',
      'parent_item_colon'   => 'Parent Resource',
      'all_items'           => 'All Resources',
      'view_item'           => 'View Resource',
      'add_new_item'        => 'Add New Resource',
      'add_new'             => 'New Resource',
      'edit_item'           => 'Edit Resource',
      'update_item'         => 'Update Resource',
      'search_items'        => 'Search Resource',
      'not_found'           => 'No resource found',
      'not_found_in_trash'  => 'No resource found in Trash',
    );
    $args = array(
      'label'               => 'resource',
      'description'         => 'Resource description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'page-attributes', 'comments', 'editor', 'thumbnail' ),
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
      'has_archive'         => 'resources',
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'resource', $args );

  }

// Hook into the 'init' action
add_action( 'init', 'register_resource_custom_post_type', 0 );

}

if ( function_exists( 'acf_add_options_sub_page' ) ){
 acf_add_options_sub_page(array(
   'title'      => 'For Photographers Settings',
   'parent'     => 'edit.php?post_type=resource',
   'capability' => 'manage_options'
 ));
}
