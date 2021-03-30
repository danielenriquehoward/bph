<?php

function tail_base_register_sidebars()
{
    register_sidebar([
        'name'          => __('Main Sidebar', 'tail-base'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'tail-base'),
        'before_widget' => '<div style="margin-bottom: 3rem;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle title is-4">',
        'after_title'   => '</h2>',
    ]);
}

add_action('widgets_init', 'tail_base_register_sidebars');
