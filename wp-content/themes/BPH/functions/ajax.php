<?php

add_action('wp_ajax_cpt_filter', 'cpt_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_cpt_filter', 'cpt_filter_function');

function cpt_filter_function(){

  $ajax_context = Timber::context();

  $args = $GLOBALS['wp_query']->query_vars;

  $ajax_context['filter_info'] = array();
  $ajax_context['filter_info']['posttype'] = $_POST['post_type_to_filter'];
  $ajax_context['filter_info']['category'] = $_POST['cat_nice_name'];

  $args = array(
      'post_type'      => $_POST['post_type_to_filter'],
      'paged'          => 1,
      'cat'            => $_POST['cat_id']
  );

  $order = 'DESC';
  if ($_POST['post_type_to_filter'] == 'events') {
    $args['order']             = 'ASC';
    $args['orderby']           = 'meta_value';
    $args['meta_key']          = 'startdate';
    $args['posts_per_page']    = 8;
  }
  else if ($_POST['post_type_to_filter'] == 'listings') {
    $args['order']              = 'ASC';
    $args['orderby']            = 'title';
    $args['posts_per_page']     = 12;
  }

  // add date filter if active on page
  if ( $_POST['start_date'] && $_POST['end_date'] ){
    $start_date = $_POST['start_date'];
    $start_date_formatted = date("Ymd", strtotime("$start_date"));
    $end_date = $_POST['end_date'];
    $end_date_formatted   = date("Ymd", strtotime("$end_date"));
    $custom_meta = array(
                    array(
                        'key'     => 'startdate',
                        'value'   => $start_date_formatted,
                        'type'    => 'date',
                        'compare' => '>=',
                    ),array(
                        'key'     => 'startdate',
                        'value'   => $end_date_formatted,
                        'type'    => 'date',
                        'compare' => '<=',
                    )
                );
    $args['meta_query'] = $custom_meta;
  }
  else if ( $_POST['start_date'] ){ //Upcoming Events Only
    $start_date = $_POST['start_date'];
    $start_date_formatted = date("Ymd", strtotime("$start_date"));
    $custom_meta = array(
                    array(
                        'key'     => 'startdate',
                        'value'   => $start_date_formatted,
                        'type'    => 'date',
                        'compare' => '>=',
                    )
                );
    $args['meta_query'] = $custom_meta;
  }

  // Probably Do Not Need This Anymore
  if($_POST['listing_type']){
    $ajax_context['filter_info']['listing_type'] = $_POST['listing_type'];
    $args['tax_query'] = array(
                          array(
                            'taxonomy' => 'listing_type',
                            'field' => 'slug',
                            'terms' => $_POST['listing_type']
                          )
                        );
  }

  $ajax_context['posts'] = new Timber\PostQuery( $args );
  $ajax_context['is_paged'] = false;

  $ajax_context['pagination'] = $ajax_context['posts']->pagination([
    'show_all' => false,
    'mid_size' => 8,
    'end_size' => 8
  ]);

  $ajax_context['max_pages'] = count($ajax_context['pagination']->pages);

  if ($_POST['post_type_to_filter'] == "listings") {
    Timber::render( 'ajax-response.twig', $ajax_context );
  }
  else{
    Timber::render( 'ajax-paginate-events.twig', $ajax_context );
  }


  wp_die();

}



?>