<?php

$context                = Timber::context();
$post                   = new TimberPost();
$context['post']        = $post;
$context['cancel_link'] = get_cancel_comment_reply_link(__('Cancel reply', 'tail-base'));

if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render(['single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'], $context);
}
