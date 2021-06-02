<?php

function create_post_types(){

  register_post_type('buildings',

  array('labels' => array(


    'name' => _x( 'Buildings', 'taxonomy general name', 'textdomain' ),
    'singular_name' => _x( 'Buildings', 'taxonomy singular name', 'textdomain' ),
    'search_items'               => __( 'Search Buildings', 'textdomain' ),
    'popular_items'              => __( 'Popular Buildings', 'textdomain' ),
    'all_items'                  => __( 'All Buildings', 'textdomain' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Building', 'textdomain' ),
    'update_item'                => __( 'Update Building', 'textdomain' ),
    'add_new_item'               => __( 'Add New Building', 'textdomain' ),
    'new_item_name'              => __( 'New Building Name', 'textdomain' ),
    'separate_items_with_commas' => __( 'Separate Buildings with commas', 'textdomain' ),
    'add_or_remove_items'        => __( 'Add or remove Buildings', 'textdomain' ),
    'choose_from_most_used'      => __( 'Choose from the most used Buildings', 'textdomain' ),
    'not_found'                  => __( 'No Buildings found.', 'textdomain' ),
    'menu_name'                  => __( 'Buildings', 'textdomain' ),


  ),
  'public' => true,
  'has_archive' => false,
  'query_var' => false,
  'hierarchical' => false,
  'rewrite' => array( 'slug' => '/buildings', 'with_front'=> false ),
  'supports' => array('editor','title','thumbnail')
  )


);

  register_post_type('contacts',

    array('labels' => array(


      'name' => _x( 'Contacts', 'taxonomy general name', 'textdomain' ),
      'singular_name' => _x( 'Contacts', 'taxonomy singular name', 'textdomain' ),
      'search_items'               => __( 'Search Contacts', 'textdomain' ),
      'popular_items'              => __( 'Popular Contacts', 'textdomain' ),
      'all_items'                  => __( 'All Contacts', 'textdomain' ),
      'parent_item'                => null,
      'parent_item_colon'          => null,
      'edit_item'                  => __( 'Edit Building', 'textdomain' ),
      'update_item'                => __( 'Update Building', 'textdomain' ),
      'add_new_item'               => __( 'Add New Building', 'textdomain' ),
      'new_item_name'              => __( 'New Building Name', 'textdomain' ),
      'separate_items_with_commas' => __( 'Separate Contacts with commas', 'textdomain' ),
      'add_or_remove_items'        => __( 'Add or remove Contacts', 'textdomain' ),
      'choose_from_most_used'      => __( 'Choose from the most used Contacts', 'textdomain' ),
      'not_found'                  => __( 'No Contacts found.', 'textdomain' ),
      'menu_name'                  => __( 'Contacts', 'textdomain' ),


    ),
    'public' => false,
    'publicly_queryable' => true,
    'show_ui' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'rewrite' => array( 'slug' => '/Contacts', 'with_front'=> false ),
    'supports' => array('editor','title')
    )


  );

  register_post_type(
    'articles',
    array(
      'labels' => array(
        'name'                       => _x( 'Articles', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Article', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Articles', 'textdomain' ),
        'popular_items'              => __( 'Popular Articles', 'textdomain' ),
        'all_items'                  => __( 'All Articles', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Article', 'textdomain' ),
        'update_item'                => __( 'Update Article', 'textdomain' ),
        'add_new_item'               => __( 'Add New Article', 'textdomain' ),
        'new_item_name'              => __( 'New Article Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Articles with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Articles', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Articles', 'textdomain' ),
        'not_found'                  => __( 'No Articles found.', 'textdomain' ),
        'menu_name'                  => __( 'Articles', 'textdomain' ),
      ),
      'public' => true,
      'has_archive' => false,
      'query_var' => false,
      'hierarchical' => false,
      'taxonomies' => array('post_tag', 'what_to_do', 'category'),
      'menu_icon' => 'dashicons-media-document',
      'show_in_rest' => true,
      'supports' => array('title'),
      'rewrite' => array( 'slug' => '/blogs', 'with_front'=> false )
    )
  );


  register_post_type(
    'recently sold',
    array(
      'labels' => array(
        'name'                       => _x( 'Recently Sold', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Recently Sold', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Recently Sold', 'textdomain' ),
        'popular_items'              => __( 'Popular Recently Sold', 'textdomain' ),
        'all_items'                  => __( 'All Recently Sold', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Recently Sold', 'textdomain' ),
        'update_item'                => __( 'Update Recently Sold', 'textdomain' ),
        'add_new_item'               => __( 'Add New Recently Sold', 'textdomain' ),
        'new_item_name'              => __( 'New Recently Sold Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Recently Sold with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Recently Sold', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Recently Sold', 'textdomain' ),
        'not_found'                  => __( 'No Recently Sold found.', 'textdomain' ),
        'menu_name'                  => __( 'Recently Sold', 'textdomain' ),
      ),
      'public' => true,
      'has_archive' => false,
      'hierarchical' => false,
      'taxonomies' => array('post_tag', 'what_to_do', 'category'),
      'supports' => array('title',),
    )
  );


}
add_action('init', 'create_post_types');
