<?php

// function friday_relationship_query( $args, $field, $post_id ) {

//   $global_monday  = strtotime(get_field('global_monday', 'option'));
//   list($y,$m,$d)  = explode('-', date('Y-m-d', $global_monday));
//   $friday         = date('Ymd', mktime(0, 0, 0, $m, $d-3, $y));

//   $args['orderby']      = 'meta_value';
//   $args['meta_key']     = 'startdate';
//   $args['meta_query']   = array(
//                             array(
//                                 'key' => 'startdate',
//                                 'value' => $friday,
//                                 'compare' => '=',
//                                 'type' => 'DATE'
//                             )
//                           );
//   return $args;
// }

// // filter for every field
// add_filter('acf/fields/relationship/query/name=filtered_friday_relationship', 'friday_relationship_query', 10, 3);

?>
