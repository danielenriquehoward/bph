<?php

/**
 * Registers a custom Navigation Menu in the custom menu editor
 */
function tail_base_register_menus()
{
    register_nav_menu('main_menu', __('Main menu', 'tail-base'));
}

add_action('after_setup_theme', 'tail_base_register_menus');
