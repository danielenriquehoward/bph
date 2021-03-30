<?php

function create_post_types(){

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
      // 'rewrite' => array( 'slug' => '/', 'with_front'=> false )
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
    'amenities',
    array(
      'labels' => array(
        'name'                       => _x( 'Ameities', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Amenity', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Amenities', 'textdomain' ),
        'popular_items'              => __( 'Popular Amenities', 'textdomain' ),
        'all_items'                  => __( 'All Amenities', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Amenities', 'textdomain' ),
        'update_item'                => __( 'Update Amenities', 'textdomain' ),
        'add_new_item'               => __( 'Add New Amenities', 'textdomain' ),
        'new_item_name'              => __( 'New Amenities Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Amenities with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Amenities', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Amenities', 'textdomain' ),
        'not_found'                  => __( 'No Amenities found.', 'textdomain' ),
        'menu_name'                  => __( 'Amenities', 'textdomain' ),
      ),
      'public' => false,
      'has_archive' => false,
      'hierarchical' => false,
      'taxonomies' => array(),
      'supports' => array('title'),
      'rewrite' => array( 'slug' => 'amenities', 'with_front'=> true )
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
    'events',
    array(
      'labels' => array(
        'name'                       => _x( 'Events', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Event', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Events', 'textdomain' ),
        'popular_items'              => __( 'Popular Events', 'textdomain' ),
        'all_items'                  => __( 'All Events', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Event', 'textdomain' ),
        'update_item'                => __( 'Update Event', 'textdomain' ),
        'add_new_item'               => __( 'Add New Event', 'textdomain' ),
        'new_item_name'              => __( 'New Event Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Events with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Events', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Events', 'textdomain' ),
        'not_found'                  => __( 'No Events found.', 'textdomain' ),
        'menu_name'                  => __( 'Events', 'textdomain' ),
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'taxonomies'    => array('post_tag', 'category'),
      'menu_icon'     => 'dashicons-calendar',
      'supports'      => array('editor','title','excerpt','thumbnail'),
      'rewrite'       => array('slug' => 'event', 'with_front' => true )
    )
  );


  register_post_type(
    'members-blog',
    array(
      'labels' => array(
        'name'                       => _x( 'Members Blog', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Members Blog', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Members Blog', 'textdomain' ),
        'popular_items'              => __( 'Popular Members Blog', 'textdomain' ),
        'all_items'                  => __( 'All Members Blog', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Members Blog', 'textdomain' ),
        'update_item'                => __( 'Update Members Blog', 'textdomain' ),
        'add_new_item'               => __( 'Add New Members Blog', 'textdomain' ),
        'new_item_name'              => __( 'New Members Blog Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Members Blog with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Members Blog', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Members Blog', 'textdomain' ),
        'not_found'                  => __( 'No Members Blog found.', 'textdomain' ),
        'menu_name'                  => __( 'Members News', 'textdomain' ),
      ),
      'public'        => true,
      'has_archive'   => true,
      'hierarchical'  => false,
      'taxonomies'    => array('post_tag', 'category'),
      'menu_icon'     => 'dashicons-businesswoman',
      'supports'      => array('editor','title','excerpt','thumbnail'),
      'rewrite'       => array('slug' => 'members-blog', 'with_front' => true )
    )
  );

  register_post_type(
    'convention-blog',
    array(
      'labels' => array(
        'name'                       => _x( 'Convention Blog', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Convention Blog', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Convention Blog', 'textdomain' ),
        'popular_items'              => __( 'Popular Convention Blog', 'textdomain' ),
        'all_items'                  => __( 'All Convention Blog', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Convention Blog', 'textdomain' ),
        'update_item'                => __( 'Update Convention Blog', 'textdomain' ),
        'add_new_item'               => __( 'Add New Convention Blog', 'textdomain' ),
        'new_item_name'              => __( 'New Convention Blog Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Convention Blog with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Convention Blog', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Convention Blog', 'textdomain' ),
        'not_found'                  => __( 'No Convention Blog found.', 'textdomain' ),
        'menu_name'                  => __( 'Convention Templates', 'textdomain' ),
      ),
      'public'        => true,
      'has_archive'   => true,
      'hierarchical'  => false,
      'taxonomies'    => array('post_tag', 'category'),
      'menu_icon'     => 'dashicons-editor-paste-text',
      'supports'      => array('editor','title','excerpt','thumbnail'),
      'rewrite'       => array('slug' => 'convention-blog', 'with_front' => true )
    )
  );

  register_post_type(
    'foundation-blog',
    array(
      'labels' => array(
        'name'                       => _x( 'Foundation Blog', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Foundation Blog', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Foundation Blog', 'textdomain' ),
        'popular_items'              => __( 'Popular Foundation Blog', 'textdomain' ),
        'all_items'                  => __( 'All   Foundation Blog', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Foundation Blog', 'textdomain' ),
        'update_item'                => __( 'Update Foundation Blog', 'textdomain' ),
        'add_new_item'               => __( 'Add New Foundation Blog', 'textdomain' ),
        'new_item_name'              => __( 'New Foundation Blog Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Foundation Blog with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Foundation Blog', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Foundation Blog', 'textdomain' ),
        'not_found'                  => __( 'No Foundation Blog found.', 'textdomain' ),
        'menu_name'                  => __( 'Foundation News', 'textdomain' ),
      ),
      'public'        => true,
      'has_archive'   => true,
      'hierarchical'  => false,
      'taxonomies'    => array('post_tag', 'category'),
      'menu_icon'     => 'dashicons-lightbulb',
      'supports'      => array('editor','title','excerpt','thumbnail'),
      'rewrite'       => array('slug' => 'foundation-blog', 'with_front' => true )
    )
  );

  register_post_type(
    'press-releases',
    array(
      'labels' => array(
        'name'                       => _x( 'Press Releases', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Press Release', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Press Releases', 'textdomain' ),
        'popular_items'              => __( 'Popular Press Releases', 'textdomain' ),
        'all_items'                  => __( 'All Press Releases', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Press Release', 'textdomain' ),
        'update_item'                => __( 'Update Press Release', 'textdomain' ),
        'add_new_item'               => __( 'Add New Press Release', 'textdomain' ),
        'new_item_name'              => __( 'New Press Release Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Press Releases with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Press Releases', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Press Releases', 'textdomain' ),
        'not_found'                  => __( 'No Press Releases found.', 'textdomain' ),
        'menu_name'                  => __( 'Press Releases', 'textdomain' ),
      ),
      'public'        => true,
      'has_archive'   => true,
      'hierarchical'  => false,
      'taxonomies'    => array('post_tag', 'category'),
      'menu_icon' => 'dashicons-text-page',
      'supports'      => array('editor','title','excerpt','thumbnail'),
      'rewrite'       => array('slug' => 'foundation-blog', 'with_front' => true )

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

  register_post_type(
    'partners',
    array(
      'labels' => array(
        'name'                       => _x( 'Partners', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Partner', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Partners', 'textdomain' ),
        'popular_items'              => __( 'Popular Partners', 'textdomain' ),
        'all_items'                  => __( 'All Partners', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Partner', 'textdomain' ),
        'update_item'                => __( 'Update Partner', 'textdomain' ),
        'add_new_item'               => __( 'Add New Partner', 'textdomain' ),
        'new_item_name'              => __( 'New Partner Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate Partners with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove Partners', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Partners', 'textdomain' ),
        'not_found'                  => __( 'No Partners found.', 'textdomain' ),
        'menu_name'                  => __( 'Partners', 'textdomain' ),
      ),
      'public' => true,
      'has_archive' => false,
      'exclude_from_search' => true,
      'hierarchical' => false,
      'menu_icon' => 'dashicons-groups',
      'supports' => array('title')
    )
  );


  // register_post_type(
  //   'shape-library',
  //   array(
  //     'labels' => array(
  //       'name'                       => _x( 'Shapes', 'taxonomy general name', 'textdomain' ),
  //       'singular_name'              => _x( 'Shape', 'taxonomy singular name', 'textdomain' ),
  //       'search_items'               => __( 'Search Shapes', 'textdomain' ),
  //       'popular_items'              => __( 'Popular Shapes', 'textdomain' ),
  //       'all_items'                  => __( 'All Shapes', 'textdomain' ),
  //       'parent_item'                => null,
  //       'parent_item_colon'          => null,
  //       'edit_item'                  => __( 'Edit Shapes', 'textdomain' ),
  //       'update_item'                => __( 'Update Shapes', 'textdomain' ),
  //       'add_new_item'               => __( 'Add New Shapes', 'textdomain' ),
  //       'new_item_name'              => __( 'New Shapes Name', 'textdomain' ),
  //       'separate_items_with_commas' => __( 'Separate Shapes with commas', 'textdomain' ),
  //       'add_or_remove_items'        => __( 'Add or remove Shapes', 'textdomain' ),
  //       'choose_from_most_used'      => __( 'Choose from the most used Shapes', 'textdomain' ),
  //       'not_found'                  => __( 'No Shapes found.', 'textdomain' ),
  //       'menu_name'                  => __( 'Shape Library', 'textdomain' ),
  //     ),
  //     'public' => true,
  //     'has_archive' => false,
  //     'hierarchical' => false,
  //     // 'taxonomies' => array('post_tag', 'category'),
  //     'menu_icon' => 'dashicons-chart-line',
  //     // 'supports' => array('editor','title','excerpt','thumbnail'),
  //     'rewrite' => array( 'slug' => false, 'with_front'=> false )
  //   )
  // );


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

function registerlistingtype() {

  // Add Class taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Listing Type', 'taxonomy general name' ),
    'singular_name'     => _x( 'Listing Type', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Listing Type' ),
    'all_items'         => __( 'All Listing Type' ),
    'parent_item'       => __( 'Parent Listing Type' ),
    'parent_item_colon' => __( 'Parent Listing Type:' ),
    'edit_item'         => __( 'Edit Listing Type' ),
    'update_item'       => __( 'Update Listing Type' ),
    'add_new_item'      => __( 'Add New Listing Type' ),
    'new_item_name'     => __( 'New Listing Type Name' ),
    'menu_name'         => __( 'Listing Types' ),
  );
  $args = array(
    'labels'            => $labels,
    'public'            => true,
    'query_var'         => true,
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'rewrite'           => array( 'slug' => '/listing-type', 'with_front' => false)
  );
  register_taxonomy( 'listing_type', array(
    'listings',
  ), $args );


}
add_action( 'init', 'registerlistingtype' );



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
