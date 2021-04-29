<?php



$context         = Timber::context();
$post            = new TimberPost();
$building = new TimberPost();



$context['post'] = $post;
// dump($context);







if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render('single-buildings.twig', $context);
}
