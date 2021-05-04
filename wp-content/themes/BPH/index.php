<?php

$data               = Timber::context();

$data['pagination'] = Timber::get_pagination($pagination_mid_size);

// $args = array(
//     'numberposts' => -1,
//     'post_type' => 'page',
//     'pagename' => 'home',
    
    
     
// );

// $final_object = new stdClass();

// $home_query= new WP_Query($args);

// // $meta = get_fields($home_query->post->ID);

// $query  = new Timber\PostQuery($home_query->post->ID);
// $post = $query->storage;

// $final_object->featured_image = wp_get_attachment_image_src( $post['featured_image'], $default)[0];

// dump($query);



Timber::render('index.twig', $data);
