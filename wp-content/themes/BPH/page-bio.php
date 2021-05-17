<?php

/**
 * Template Name: Page Bio
 */

$context         = Timber::context();
$post            = new TimberPost();
$context['post'] = $post;

$args1 = array(
    'numberposts' => 1,
    'post_type' => 'bio',
    
    
     
);

$args2 = array(
    'numberposts' => -1,
    'post_type' => 'recently sold',
    
    
     
);



$bio= new WP_Query($args1);
$recent_sales = new WP_QUERY($args2);

$sold_array = [];

foreach($recent_sales->posts as $sale){

    $sale_object =  new stdClass();
    $sale_object->title = $sale->post_name;

    $fields = get_fields($sale->ID);

    $sale_object->address = $fields['address'];
    $sale_object->price = number_format($fields['price']);
    $sale_object->unit_info = $fields['unit_info'];

    $sale_object->image = wp_get_attachment_image_src( $fields['image'], $default)[0];



    array_push($sold_array, $sale_object);

}








$context['buildings'] = $buildings_array;





$id= $post->ID;


$context['sold'] = $sold_array;

$context['bio_acf'] = get_fields($id);
$context['contact_info'] = get_field('contact_info', 'option');
$context['company_logo'] = wp_get_attachment_image_src(get_field('company_logo', 'option'), $default)[0];
$context['headshot'] = wp_get_attachment_image_src(get_fields($id)['headshot'], $default)[0];
$context['bio_text'] = wpautop(get_field('bio', $id));

dump($context);

Timber::render('page-bio.twig', $context);
