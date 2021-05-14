<?php

/**
 * Template Name: Page Home
 */

/**
 * Get Context
 */
$context                = Timber::context();
$post                   = new TimberPost();
$context['post']        = $post;

$featured_properties = get_field('featured_properties', 'option');
$context['contact_info'] = get_field('contact_info', 'option');
$context['affiliations'] = get_field('affiliations', 'option');

$featured_properties_array = [];

foreach($featured_properties as $property){

    $property_object = new stdClass();



    $property_object->slug = $property->post_name;
    $property_object->title = $property->post_title;
    $property_object->image = wp_get_attachment_image_src( get_field('image', $property->ID), $default)[0];



    // get_fields($property->ID)

    array_push($featured_properties_array, $property_object);

}


$args = array(
    'numberposts' => -1,
    'post_type' => 'buildings',


);

$buildings= new WP_Query($args);

$context['featured_properties']        = $featured_properties_array;

$context['buildings'] = $buildings->posts;

$context['featured_image'] = wp_get_attachment_image_src($post->featured_image, $default)[0];
$context['company_logo'] = wp_get_attachment_image_src(get_field('company_logo', 'option'), $default)[0];


Timber::render( 'page-home.twig' , $context );