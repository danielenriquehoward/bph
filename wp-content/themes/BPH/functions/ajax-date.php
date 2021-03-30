<?php

add_action('wp_ajax_date_filter', 'date_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_date_filter', 'date_filter_function');

function date_filter_function(){

  global $wp_query;

  $ajax_context = Timber::context();
  $args = $GLOBALS['wp_query']->query_vars;

  $start_date = my_sanitize($_POST['start_date']);
  $end_date   = my_sanitize($_POST['end_date']);

  $post_type_to_load = "events";

  $start_date_formatted = date("Ymd", strtotime("$start_date"));
  $end_date_formatted   = date("Ymd", strtotime("$end_date"));

  // Edit these values
  $custom_post_type  = 'events';
  $custom_date_field = 'startdate';
  $order             = 'ASC';

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

  $args = array(
    'post_type'      => $custom_post_type,
    'posts_per_page' => 8,
    'paged'          => 1,
    'meta_key'       => $custom_date_field,
    'orderby'        => 'meta_value',
    'order'          => $order,
    'meta_query'     => $custom_meta,
  );

  //Integrate with Cat Filter
  if($_POST['cat_id']){
    $args['cat']  = $_POST['cat_id'];
  }

  $ajax_context['posts']      = new Timber\PostQuery( $args );

  $ajax_context['pagination'] = $ajax_context['posts']->pagination([
    'show_all' => false,
    'mid_size' => 8,
    'end_size' => 8
  ]);

  $ajax_context['max_pages'] = count($ajax_context['pagination']->pages);

  Timber::render( 'ajax-paginate-'.$post_type_to_load.'.twig', $ajax_context );

  wp_die();

}

?>
