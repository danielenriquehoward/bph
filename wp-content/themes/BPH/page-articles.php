<?php

/**
 * Template Name: Page Articles
 */

$context         = Timber::context();
$post            = new TimberPost();
$context['post'] = $post;

$all_articles = new WP_Query(
    ['posttype'] = 'articles'
);



$context['all_articles'] = $all_articles;

Timber::render('page-articles.twig', $context);
