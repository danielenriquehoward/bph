<?php

$context                = Timber::context();
$post                   = new TimberPost();
$context['post']        = $post;
$context['cancel_link'] = get_cancel_comment_reply_link(__('Cancel reply', 'tail-base'));

dump($post);

if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render('single-articles.twig', $context);
}
