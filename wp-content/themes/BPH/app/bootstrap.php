<?php

use Tailbase\Utils\Session;

// Load all composer packages
require_once __DIR__ . '/../vendor/autoload.php';

// Init Timber
$timber = new \Timber\Timber();

// Init Dotenv
$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

// Load WordPress config files
require_once __DIR__ . '/../app/config/autoload.php';

// Init Sessions
// Session::init();

/**
 * Loads the theme's translated strings.
 */
function localize()
{
    load_theme_textdomain('tail-base', get_template_directory() . '/resources/languages');
}

add_action('after_setup_theme', 'localize');
