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
  'rewrite' => false,
  
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
      'supports' => array('editor','title','excerpt','thumbnail'),
      // "cptp_permalink_structure" => "/%category%/%postname%/",
      'rewrite' => array( 'slug' => '/blogs', 'with_front'=> false )
      // 'rewrite' => array(
      //   'slug' => '/',
      //   'permastruct' => '/%category%/%postname%/'
      // ),
    )
  );



  register_post_type(
    'listings',
    array(
      'labels' => array(
        'name'                       => _x( 'Listings', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Listing', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Listings', 'textdomain' ),
        'popular_items'              => __( 'Popular Listings', 'textdomain' ),
        'all_items'                  => __( 'All Listings', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Listings', 'textdomain' ),
        'update_item'                => __( 'Update Listings', 'textdomain' ),
        'add_new_item'               => __( 'Add New Listings', 'textdomain' ),
        'new_item_name'              => __( 'New Listings Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Listings with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Listings', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Listings', 'textdomain' ),
        'not_found'                  => __( 'No Listings found.', 'textdomain' ),
        'menu_name'                  => __( 'Listings', 'textdomain' ),
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'taxonomies' => array('post_tag', 'category'),
      'menu_icon' => 'dashicons-admin-site-alt3',
      'supports' => array('editor','title','excerpt','thumbnail'),
      'rewrite' => array( 'slug' => 'listings', 'with_front'=> true )
    )
  );




  register_post_type(
    'guides',
    array(
      'labels' => array(
        'name'                       => _x( 'Guides', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Guide', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Guides', 'textdomain' ),
        'popular_items'              => __( 'Popular Guides', 'textdomain' ),
        'all_items'                  => __( 'All Guides', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Guides', 'textdomain' ),
        'update_item'                => __( 'Update Guides', 'textdomain' ),
        'add_new_item'               => __( 'Add New Guides', 'textdomain' ),
        'new_item_name'              => __( 'New Guides Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Guides with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Guides', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Guides', 'textdomain' ),
        'not_found'                  => __( 'No Guides found.', 'textdomain' ),
        'menu_name'                  => __( 'Guides', 'textdomain' ),
      ),
      'public' => true,
      'has_archive' => false,
      'hierarchical' => false,
      'taxonomies' => array('post_tag', 'what_to_do', 'category'),
      'menu_icon' => 'dashicons-location-alt',
      'supports' => array('editor','title','excerpt','thumbnail'),
      // 'rewrite' => array( 'slug' => 'guides', 'with_front'=> true )
    )
  );



  register_post_type(
    'quotes',
    array(
      'labels' => array(
        'name'                       => _x( 'Quotes', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Quote', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Quotes', 'textdomain' ),
        'popular_items'              => __( 'Popular Quotes', 'textdomain' ),
        'all_items'                  => __( 'All Quotes', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Quote', 'textdomain' ),
        'update_item'                => __( 'Update Quote', 'textdomain' ),
        'add_new_item'               => __( 'Add New Quote', 'textdomain' ),
        'new_item_name'              => __( 'New Quote Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Quotes with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Quotes', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Quotes', 'textdomain' ),
        'not_found'                  => __( 'No Quotes found.', 'textdomain' ),
        'menu_name'                  => __( 'Quotes', 'textdomain' ),
      ),
      'public' => true,
      'has_archive' => false,
      'exclude_from_search' => true,
      'hierarchical' => false,
      'menu_icon' => 'dashicons-format-quote',
      'supports' => array('title')
    )
  );

}
add_action('init', 'create_post_types');


////////////////////////////////////////////////////////////////////
/////////////////////// CUSTOM TAXONOMIES //////////////////////////
////////////////////////////////////////////////////////////////////


// function registerwhattodo() {

//   // Add Class taxonomy, make it hierarchical (like categories)
//   $labels = array(
//     'name'              => _x( 'What To Do', 'taxonomy general name' ),
//     'singular_name'     => _x( 'What To Do', 'taxonomy singular name' ),
//     'search_items'      => __( 'Search What To Do' ),
//     'all_items'         => __( 'All What To Do' ),
//     'parent_item'       => __( 'Parent What To Do' ),
//     'parent_item_colon' => __( 'Parent What To Do:' ),
//     'edit_item'         => __( 'Edit What To Do' ),
//     'update_item'       => __( 'Update What To Do' ),
//     'add_new_item'      => __( 'Add New What To Do' ),
//     'new_item_name'     => __( 'New What To Do Name' ),
//     'menu_name'         => __( 'What To Dos' ),
//   );
//   $args = array(
//     'labels'            => $labels,
//     'public'            => true,
//     'query_var'         => false,
//     'hierarchical'      => false,
//     'show_ui'           => false,
//     'show_admin_column' => false,
//     //'rewrite'           => array( 'slug' => '/what-to-do', 'with_front' => false)
//   );
//   register_taxonomy( 'what_to_do', array(
//     'articles',
//   ), $args );


// }
// add_action( 'init', 'registerwhattodo' );


/* //// Listing Types Custom Taxonomy //// */

// function registerlistingtype() {

//   // Add Class taxonomy, make it hierarchical (like categories)
//   $labels = array(
//     'name'              => _x( 'Listing Type', 'taxonomy general name' ),
//     'singular_name'     => _x( 'Listing Type', 'taxonomy singular name' ),
//     'search_items'      => __( 'Search Listing Type' ),
//     'all_items'         => __( 'All Listing Type' ),
//     'parent_item'       => __( 'Parent Listing Type' ),
//     'parent_item_colon' => __( 'Parent Listing Type:' ),
//     'edit_item'         => __( 'Edit Listing Type' ),
//     'update_item'       => __( 'Update Listing Type' ),
//     'add_new_item'      => __( 'Add New Listing Type' ),
//     'new_item_name'     => __( 'New Listing Type Name' ),
//     'menu_name'         => __( 'Listing Types' ),
//   );
//   $args = array(
//     'labels'            => $labels,
//     'public'            => true,
//     'query_var'         => true,
//     'hierarchical'      => true,
//     'show_ui'           => true,
//     'show_admin_column' => true,
//     'rewrite'           => array( 'slug' => '/listing-type', 'with_front' => false)
//   );
//   register_taxonomy( 'listing_type', array(
//     'listings',
//   ), $args );


// }
// add_action( 'init', 'registerlistingtype' );



// nested nav dsacve for later @jamesgillispie

// function menu_nested_pages() {
//   $post = new TimberPost();
//   wp_list_pages(
//     array(
//       'post_type' => $post->post_type,
//       'child_of'  => $post->ID,
//       'orderby'   => 'menu_order',
//       'order'     => 'ASC',
//       'depth'     => 0,
//       'title_li'  => '' // hides parent
//     )
//   );
// }
// function is_menu_nested_pages() {
//   $post = new TimberPost();
//   $current_post_id = $post->ID;
//   wp_list_pages(
//     array(
//       'post_type' => $post->post_type,
//       'child_of'  => $post->post_ancestors,
//       'title_li' => '',
//       // 'exclude' => $current_post_id
//     )
//   );
// }
