## About Tailbase

> Awesome WordPress starter theme with own CLI for developers based on modern web technologies.

## Features
* [Tailwind](http://tailwindcss.com/) (Responsive CSS framework based on Flexbox)
* [Grid](https://github.com/karolis-sh/tailwind-bootstrap-grid/) (CSS Grid that uses bootstrap classes but uses tailwind)
* [Timber](https://www.upstatement.com/timber/)
  * Twig Template Engine
  * Cleaner and better code
  * Separates the logic from presentation
* [Webpack (Laravel Mix)](https://laravel-mix.com/)
  * Sass / Scss for stylesheets (Minimize in production)
  * ES6 for Javascript (Minimize in production)
  * Automatic Cache Busting
  * [Vuejs](https://vuejs.org/) for boosting frontend development
  * [BrowserSync](https://www.browsersync.io/) for synchronised browser testing
* [WooCommerce](https://woocommerce.com/) support with basic boilerplate.

## Requirements
* [Wordpress](https://wordpress.org/) >= v4.9.6
* [Composer](https://getcomposer.org/download/) >= v1.6.5
* [PHP](http://php.net/manual/en/install.php) >= v7.0
* [Yarn](https://yarnpkg.com/en/) >= v1.7.0 **or** [npm](https://www.npmjs.com/) >= v6.1.0
* [Nodejs](https://nodejs.org/en/) >= v8.11.1

## Installation
* `composer install`
* `cd tailbase`
* `npm install`
* define your custom webpack config to `webpack.mix.js` file
* `npm run watch`
* Remember to activate Timber plugin! *IMPORTANT!
* Happy developing :)

## Structure
```
tail-base/                                          # Theme root
├── app/                                            # Theme logic
│   ├── config/                                     # Theme config
│   │   ├── wp/                                     # WordPress specific config
│   │   │   ├── admin-page.php                      # Register here WordPress Admin Page config
│   │   │   ├── image-sizes.php                     # Register here WordPress Custom image sizes
│   │   │   ├── login-page.php                      # Register here WordPress Login Page config
│   │   │   ├── maintenance.php                     # Maintenance mode config
│   │   │   ├── menus.php                           # Register here WordPress navigation menus
│   │   │   ├── scripts-and-styles.php              # Register here WordPress scripts and styles
│   │   │   ├── security.php                        # Things that increase the site security
│   │   │   ├── sidebars.php                        # Register here WordPress sidebars
│   │   │   └── theme-supports.php                  # Register here WordPress theme features
│   │   ├── autoload.php                            # Includes all config files (DON'T REMOVE THIS)
│   │   ├── timber.php                              # Timber specific config
│   │   └── woocommerce.php                         # Init woocommerce support
│   ├── models/                                     # Wrappers for Timber Classes
│   ├── timber-extends/                             # Extended Timber Classes
│   │   └── TailbaseSite.php                        # Extended TimberSite Class
│   ├── bootstrap.php                               # Bootstrap theme
│   ├── helpers.php                                 # Common helper functions
├── build/                                          # Theme assets and views
│   ├── config.js                                   # Custom webpack config
│   ├── webpack.config.js                           # Webpack config
├── resources/                                      # Theme assets and views
│   ├── assets/                                     # Front-end assets
│   │   ├── js/                                     # Javascripts
│   │   │   └── components/                         # Vue Components
│   │   ├── sass/                                   # Styles
│   │   │   └── components/                         # Partials
│   ├── languages/                                  # Language features
│   │   ├── tail-base.pot                           # Template for translation
│   │   └── messages.php                            # Language strings
│   ├── views/                                      # Theme Twig files
│   │   ├── components/                             # Partials
│   │   ├── footer/                                 # Theme footer templates
│   │   └── header/                                 # Theme header templates
```xw
