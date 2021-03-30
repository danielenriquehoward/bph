<?php

  // kill tag, author, date archives
  function meks_remove_wp_archives(){
    //If we are on category or tag or date or author archive
    if( is_tag() || is_date() || is_author() ) {
      global $wp_query;
      $wp_query->set_404(); //set to 404 not found page
    }
  }
  add_action('template_redirect', 'meks_remove_wp_archives');

  // hide Posts for sidebar in wp-admin
  function post_remove () {
    remove_menu_page('edit.php');
  }
  add_action('admin_menu', 'post_remove');

  // add tag support to pages
  function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
  }

  // tag hooks
  add_action('init', 'tags_support_all');


  // add excerpt
  add_post_type_support( 'page', 'excerpt' );

  // close coauthors by default https://github.com/Bellweather-Agency/CSG-ERC/issues/170

  function close_yoast() {
    echo "<script type='text/javascript' >
            var element = document.getElementById('wpseo_meta');
            element.classList.add('closed');
          </script>";
  }
  add_action('admin_footer', 'close_yoast');

  // function close_coauthors() {
  //   echo "<script type='text/javascript' >
  //           var element = document.getElementById('coauthorsdiv');
  //           element.classList.add('closed');
  //         </script>";
  // }
  // add_action('admin_footer', 'close_coauthors');



  // function close_hero_acf() {
  //   echo "<script type='text/javascript' >
  //           var element = document.getElementById('acf-group_5c019232d4a8b');
  //           element.classList.add('closed');
  //         </script>";
  // }
  // add_action('admin_footer', 'close_hero_acf');



  // change placeholder for people cpt
  add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );
    function my_title_place_holder($title , $post){

    if( $post->post_type == 'people' ){
      $my_title = "Add Name";
      return $my_title;
    }

    return $title;

  }


  // https://wordpress.stackexchange.com/questions/6818/change-enter-title-here-help-text-on-a-custom-post-type
  function change_default_title( $title ){
      $screen = get_current_screen();

      if  ( 'team' == $screen->post_type ) {
          $title = 'Add Name';

      // } elseif ( 'custom_post_type_2' == $screen->post_type ) {
      //  $title = 'CPT2 New Title';

      }

      return $title;
  }

  add_filter( 'enter_title_here', 'change_default_title' );

  // hide post formats
  add_action( 'init', 'my_remove_post_type_support', 10 );
  function my_remove_post_type_support() {
      remove_post_type_support( 'post', 'post-formats' );
  }

  //remove styling for tablepress
  add_filter( 'tablepress_use_default_css', '__return_false' );

  // https://www.advancedcustomfields.com/resources/acf-fields-flexible_content-layout_title/
  function my_acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

    // // remove layout title from text
    // $title = '';

    if( $text = get_sub_field('title') ) {
      $title .= '<h4 style="display:inline">&nbsp;:&nbsp;' . $text . '</h4>';
    }
    elseif ( $text = get_sub_field('sub_title') ) {
      $title .= '<h4 style="display:inline">&nbsp;:&nbsp;' . $text . '</h4>';
    }

    // return
    return $title;

  }

  add_filter('acf/fields/flexible_content/layout_title/name=content_blocks', 'my_acf_flexible_content_layout_title', 10, 4);