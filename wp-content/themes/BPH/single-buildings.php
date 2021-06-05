<?php

$context         = Timber::context();
$post            = new TimberPost();

$context['post'] = $post;
$context['featured_image'] = get_the_post_thumbnail_url($post->ID, 'full');

if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render('single-buildings.twig', $context);
}
