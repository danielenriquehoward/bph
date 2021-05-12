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

$snipped_blogs = [];

foreach($all_blogs->posts as $blurb){

    $blurb_object = new stdClass();
    $blurb_object->ID = $blurb->ID;
    $blurb_object->slug= $blurb->post_name;
    $blurb_object->title=$blurb->post_title;
    $blurb_object->content =  strval(wp_trim_words($blurb->post_content, 75));
    $blurb_object->date_posted = date('m/d/Y', strtotime($blurb->post_date));

    array_push($snipped_blogs, $blurb_object);
     
}

$context['all_blogs'] = $snipped_blogs;




Timber::render('page-blogs.twig', $context);
