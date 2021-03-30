<?php

function get_template_messages()
{
    return [
        // 404 Page
        '404' => [
            'title'     => __('404 - Page not found.', 'tail-base'),
            'body'      => __('The page you have looked for does not exist.', 'tail-base'),
            'link_text' => __('Back to home page', 'tail-base'),
        ],

        // Article Component
        'article' => [
            'edit' => __('Edit', 'tail-base'),
        ],

        // Base Page
        'base' => [
            'no_content' => __('Sorry, no content', 'tail-base'),
        ],

        // Comment Form Page
        'comment_form' => [
            'name'                => __('Name', 'tail-base'),
            'email'               => __('Email', 'tail-base'),
            'website'             => __('Website', 'tail-base'),
            'comment'             => __('Comment', 'tail-base'),
            'comment_placeholder' => __('Enter your comment here...', 'tail-base'),
            'post_comment'        => __('Post Comment', 'tail-base'),
            'reset'               => __('Reset', 'tail-base'),
        ],

        // Comment Page
        'comment' => [
            'reply' => __('Reply', 'tail-base'),
        ],

        // Search Page
        'search' => [
            'no_results' => __('Sorry, No Results. Try your search again.', 'tail-base'),
        ],

        // Search Form Page
        'search_form' => [
            'search' => __('Search', 'tail-base'),
        ],

        // Single Password Page
        'single_password' => [
            'password' => __('Password', 'tail-base'),
            'submit'   => __('Submit', 'tail-base'),
        ],

        // Single Page
        'single' => [
            'edit'     => __('Edit', 'tail-base'),
            'comments' => __('Comments', 'tail-base'),
        ],
    ];
}
