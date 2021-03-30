<?php

/**
 * Login Page logo url
 *
 * @return mixed
 */
function tail_base_login_logo_url()
{
    return home_url();
}

add_filter('login_headerurl', 'tail_base_login_logo_url');

/**
 * Login Page logo title
 *
 * @return string
 */
function tail_base_login_logo_title()
{
    return 'Tailbase';
}

add_filter('login_headertext', 'tail_base_login_logo_title');

/**
 * Add favicon to Login Page
 */
add_action('login_head', function () {
    echo '<link rel="shortcut icon" href="' . images_path('favicon.png') . '" />';
});
