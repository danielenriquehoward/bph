<?php

$context                = Timber::context();
$post                   = new TimberPost();

$post->date_published = date('m/d/Y', strtotime($post->post_date));
$context['post']        = $post;
$context['cancel_link'] = get_cancel_comment_reply_link(__('Cancel reply', 'tail-base'));



dump($context);

if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render('single-articles.twig', $context);
}
