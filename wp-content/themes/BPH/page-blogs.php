<?php

/**
 * Template Name: Page Blogs
 */

$context         = Timber::context();
$post            = new TimberPost();
$context['post'] = $post;

$args = array(
    'numberposts' => -1,
    'post_type' => 'articles',
 //    'meta_query' => array(
 //     array( "key" => "brand_name", "value" => $title )
 //   ),
    
     
);

$all_blogs= new WP_Query($args);



$context['all_blogs'] = $all_blogs;

dump($context);

Timber::render('page-blogs.twig', $context);
