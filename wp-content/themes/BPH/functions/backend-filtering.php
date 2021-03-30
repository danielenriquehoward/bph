<?php

function friday_relationship_query( $args, $field, $post_id ) {

  $global_monday  = strtotime(get_field('global_monday', 'option'));
  list($y,$m,$d)  = explode('-', date('Y-m-d', $global_monday));
  $friday         = date('Ymd', mktime(0, 0, 0, $m, $d-3, $y));

  $args['orderby']      = 'meta_value';
  $args['meta_key']     = 'startdate';
  $args['meta_query']   = array(
                            array(
                                'key' => 'startdate',
                                'value' => $friday,
                                'compare' => '=',
                                'type' => 'DATE'
                            )
                          );
  return $args;
}

// filter for every field
add_filter('acf/fields/relationship/query/name=filtered_friday_relationship', 'friday_relationship_query', 10, 3);


function saturday_relationship_query( $args, $field, $post_id ) {

  $global_monday  = strtotime(get_field('global_monday', 'option'));
  list($y,$m,$d)  = explode('-', date('Y-m-d', $global_monday));
  $saturday       = date('Ymd', mktime(0, 0, 0, $m, $d-2, $y));

  $args['orderby']      = 'meta_value';
  $args['meta_key']     = 'startdate';
  $args['meta_query']   = array(
                            array(
                                'key' => 'startdate',
                                'value' => $saturday,
                                'compare' => '=',
                                'type' => 'DATE'
                            )
                          );
  return $args;
}

// filter for every field
add_filter('acf/fields/relationship/query/name=filtered_saturday_relationship', 'saturday_relationship_query', 10, 3);


function sunday_relationship_query( $args, $field, $post_id ) {

  $global_monday  = strtotime(get_field('global_monday', 'option'));
  list($y,$m,$d)  = explode('-', date('Y-m-d', $global_monday));
  $sunday         = date('Ymd', mktime(0, 0, 0, $m, $d-1, $y));

  $args['orderby']      = 'meta_value';
  $args['meta_key']     = 'startdate';
  $args['meta_query']   = array(
                            array(
                                'key' => 'startdate',
                                'value' => $sunday,
                                'compare' => '=',
                                'type' => 'DATE'
                            )
                          );
  return $args;
}

// filter for every field
add_filter('acf/fields/relationship/query/name=filtered_sunday_relationship', 'sunday_relationship_query', 10, 3);



// function remove_past_events( $args, $field, $post_id ) {

//   $args['orderby']      = 'meta_value';
//   $args['meta_key']     = 'startdate';
//   $args['meta_query']   = array(
//                             array(
//                                 'key'     => 'startdate',
//                                 'value'   => date("Ymd"),
//                                 'type'    => 'date',
//                                 'compare' => '>=',
//                             )
//                           );
//   return $args;
// }

// // filter for every field
// add_filter('acf/fields/relationship/query/???', 'remove_past_events', 10, 3);

?>
