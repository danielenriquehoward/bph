<?php

/**
 * Template Name: Page Buildings
 */

$context         = Timber::context();
$post            = new TimberPost();
$buildings = new TimberPost();
$context['post'] = $post;
$context['cancel_link'] = get_cancel_comment_reply_link(__('Cancel reply', 'tail-base'));

$args = array(
           'numberposts' => -1,
           'post_type' => 'buildings',
        //    'meta_query' => array(
        //     array( "key" => "brand_name", "value" => $title )
        //   ),
           
            
       );

$all_buildings= new WP_Query($args);

$buildings_array = [];




foreach($all_buildings->posts as $building){
    
    $building_object = new stdClass();

    $building_object->id = $building->ID;
    $building_object->slug = $building->post_name;
    $building_object->title = $building->post_title;
    // $building_object->description = $building->post_content;
    $building_object->image_url = get_post_meta($building->ID, 'image_url')[0];
    $building_object->address = get_post_meta($building->ID, 'info_address')[0];
    // $building_object->price = get_post_meta($building->ID, 'info_price')[0];
    // $building_object->floors = get_post_meta($building->ID, 'info_floors')[0];
    // $building_object->units = get_post_meta($building->ID, 'info_units')[0];
    $building_object->neighborhood = get_post_meta($building->ID, 'info_neighborhood')[0];


    
    
    array_push($buildings_array, $building_object);
    //  array_push($buildings_array, get_post_meta($building->ID));
    

}

dump($buildings_array);

$context['buildings'] = $buildings_array;





if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render('page-buildings.twig', $context);
}
