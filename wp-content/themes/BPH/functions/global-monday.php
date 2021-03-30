<?php

  add_action( 'init', 'update_global_monday' );

  function update_global_monday() {

    $now = time();
    $global_monday = strtotime(get_field('global_monday', 'option'));
    $gm_day_of_week = date('N', $global_monday);

    if ( ($now > $global_monday) or ($gm_day_of_week != 1) ) {
    //if we have past the global monday or the global monday is wrong, we need to reset

      $day_of_week = date('N', $now);
      $days_to_add = 8 - $day_of_week;  //e.g. tue = 2, so add 6

      list($y,$m,$d)    = explode('-', date('Y-m-d', $now));
      $d = $d + $days_to_add;

      $new_monday       = date('m/d/Y', mktime(0, 0, 0, $m, $d, $y));

      update_field('global_monday', $new_monday, 'option');

      $sunday         = date('Ymd', mktime(0, 0, 0, $m, $d-1, $y));
      $saturday       = date('Ymd', mktime(0, 0, 0, $m, $d-2, $y));
      $friday         = date('Ymd', mktime(0, 0, 0, $m, $d-3, $y));


      // SET FRIDAY VALUES ==============================================

      $friday_query = new WP_Query(
        array(
          'post_type'       => 'events',
          'posts_per_page'  => -1,
          'orderby'         => 'meta_value',
          'meta_key'        => 'startdate',
          'order'           => 'ASC',
          'meta_query' => array(
                            array(
                                'key' => 'startdate',
                                'value' => $friday,
                                'compare' => '=',
                                'type' => 'DATE'
                            )
          )
        )
      );

      $friday_events = new Timber\PostQuery($friday_query);
      $friday_ids = array();
      foreach ($friday_events as $event) {
        array_push($friday_ids, $event->ID);
      }
      update_field('filtered_friday_relationship', $friday_ids, 'option');


      // SET SATURDAY VALUES ==============================================

      $saturday_query = new WP_Query(
        array(
          'post_type'       => 'events',
          'posts_per_page'  => -1,
          'orderby'         => 'meta_value',
          'meta_key'        => 'startdate',
          'order'           => 'ASC',
          'meta_query' => array(
                            array(
                                'key' => 'startdate',
                                'value' => $saturday,
                                'compare' => '=',
                                'type' => 'DATE'
                            )
          )
        )
      );

      $saturday_events = new Timber\PostQuery($saturday_query);
      $saturday_ids = array();
      foreach ($saturday_events as $event) {
        array_push($saturday_ids, $event->ID);
      }
      update_field('filtered_saturday_relationship', $saturday_ids, 'option');


      // SET SUNDAY VALUES ==============================================

      $sunday_query = new WP_Query(
        array(
          'post_type'       => 'events',
          'posts_per_page'  => -1,
          'orderby'         => 'meta_value',
          'meta_key'        => 'startdate',
          'order'           => 'ASC',
          'meta_query' => array(
                            array(
                                'key' => 'startdate',
                                'value' => $sunday,
                                'compare' => '=',
                                'type' => 'DATE'
                            )
          )
        )
      );

      $sunday_events = new Timber\PostQuery($sunday_query);
      $sunday_ids = array();
      foreach ($sunday_events as $event) {
        array_push($sunday_ids, $event->ID);
      }
      update_field('filtered_sunday_relationship', $sunday_ids, 'option');

    }

  }

?>