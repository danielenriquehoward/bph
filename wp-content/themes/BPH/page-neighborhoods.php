<?php

/**
 * Template Name: Page Neighborhood
 */

/**
 * Get Context
 */
$context                = Timber::context();
$post                   = new TimberPost();
$context['post']        = $post;
$context['featured_image'] = get_the_post_thumbnail_url($post->ID, 'full');

Timber::render( 'page-neighborhood.twig' , $context );