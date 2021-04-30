<?php

/**
 * Template Name: Page Bio
 */

$context         = Timber::context();
$post            = new TimberPost();
$context['post'] = $post;

$args = array(
    'numberposts' => 1,
    'post_type' => 'bio',
    
    
     
);

$bio= new WP_Query($args);








$id= $bio->post->ID;




$context['acf'] = get_fields($id);
dump($context);
Timber::render('page-bio.twig', $context);
