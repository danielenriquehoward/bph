<?php

add_action('wp_ajax_pagination', 'pagination_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_pagination', 'pagination_function');

function my_sanitize(string $data): string
{
  return strip_tags(
    stripslashes(
      sanitize_text_field(
        $data
      )
    )
  );
}

function pagination_function(){

  global $wp_query;

  $ajax_context = Timber::context();

  $page_to_load = my_sanitize($_POST['current_page']);
  $post_type_to_load = my_sanitize($_POST['post_type']);
  $orderby_to_load = my_sanitize($_POST['orderby']);

  $args = array(
      'post_type'       => $post_type_to_load,
      'orderby'         => $orderby_to_load,
      'order'           => 'ASC',
      'paged'           => $page_to_load
  );

  if ($post_type_to_load == 'listings') {
    $args['posts_per_page'] = 12;
  }
  else {
    $args['posts_per_page'] = 8;
  }

  if($orderby_to_load == 'meta_value') {
    $custom_date_field = 'startdate';
    $args['meta_key']  = $custom_date_field;
  }

  //Integrate with Cat Filter
  if($_POST['cat_id']){
    $args['cat']  = $_POST['cat_id'];
  }

  // NO Longer Needed
  if($_POST['listing_type']){
    $args['tax_query'] = array(
                          array(
                            'taxonomy' => 'listing_type',
                            'field' => 'slug',
                            'terms' => $_POST['listing_type']
                          )
                        );
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

  $my_posts = new WP_Query($args);

  $ajax_context['posts'] = new Timber\PostQuery( $args );

  if ($post_type_to_load == 'listings') {
    $ajax_context['pagination'] = $ajax_context['posts']->pagination([
      'show_all' => false,
      'mid_size' => 12,
      'end_size' => 12
    ]);
  }
  else {
    $ajax_context['pagination'] = $ajax_context['posts']->pagination([
      'show_all' => false,
      'mid_size' => 8,
      'end_size' => 8
    ]);
  }


  $ajax_context['max_pages'] = count($ajax_context['pagination']->pages);

  Timber::render( 'ajax-paginate-'.$post_type_to_load.'.twig', $ajax_context );

  wp_die();

}

?>