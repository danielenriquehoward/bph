<?php

/**
 * Register scripts and styles and enqueue them
 */

 // queue required assets
function queue_theme_assets() {

    $dirJS = new DirectoryIterator(get_stylesheet_directory() . '/dist/js');
    $dirCSS = new DirectoryIterator(get_stylesheet_directory() . '/dist/css');

    foreach ($dirJS as $file) {

      if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
        $fullName = basename($file);


        wp_enqueue_script( 'script-bundle', get_template_directory_uri() . '/dist/js/' . $fullName, array(), '1.0.0', true );

      }

    }

    foreach ($dirCSS as $file) {

      if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
        $fullName = basename($file);


        $name = substr( $fullName, 0, strpos($fullName, '.') );


        if ($name == 'styles') {
          wp_enqueue_style( 'style-bundle', get_template_directory_uri() . '/dist/css/' . $fullName, array(), '1.0.0');
        }
      }

    }

};

add_action( 'wp_enqueue_scripts', 'queue_theme_assets' );

/**
 * Register Login Page scripts and styles and enqueue them
 */
function tail_base_login_scripts_and_styles()
{
    $dirCSS = new DirectoryIterator(get_stylesheet_directory() . '/dist/css');
    foreach ($dirCSS as $file) {

      if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
        $fullName = basename($file);


        $name = substr( $fullName, 0, strpos($fullName, '.') );


        if ($name == 'login') {
          wp_enqueue_style( 'login-bundle', get_template_directory_uri() . '/dist/css/' . $fullName, array(), '1.0.0');
        }
      }

    }
}

add_action('login_enqueue_scripts', 'tail_base_login_scripts_and_styles', 999);

/**
 * Register Admin Page scripts and styles and enqueue them
 */
function tail_base_admin_scripts_and_styles()
{
    $dirCSS = new DirectoryIterator(get_stylesheet_directory() . '/dist/css');
        foreach ($dirCSS as $file) {

          if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
            $fullName = basename($file);


            $name = substr( $fullName, 0, strpos($fullName, '.') );


            if ($name == 'admin') {
              wp_enqueue_style( 'admin-bundle', get_template_directory_uri() . '/dist/css/' . $fullName, array(), '1.0.0');
            }
          }

        }
}

add_action('admin_enqueue_scripts', 'tail_base_admin_scripts_and_styles', 999);
