<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x7ePuC1ovzt+VHpnLr1dpPliN5vhVofwBk8Yt9Nud/rQnRgRQ5JOv8602JDPLOI5pmMTib4l7B4G0ti0+6rO9g==');
define('SECURE_AUTH_KEY',  '4iX/+CCu4YBM/kgR65iQ+b3ktkb2KjoPEq0BQbZPIoRus+kaN8RE1zsVn2HZgtHOs2HaUNARxDC6L6PCL6+Eqw==');
define('LOGGED_IN_KEY',    '4GczSHBgA9/uzz8u4n/As8UDYIRTeLM2/pATK0CSnA2mOt4pdU0CpbGzOPdaXQEPzcM5z5rWS4W3dHpKDPdpPw==');
define('NONCE_KEY',        '37JH244VeFNOMRGwJm6vurp3e0OEf604t6kesfKUzVpm7MGdUkyenUj/cgUkJ3+dv08Ihv40Kv0QObm+sXiYjw==');
define('AUTH_SALT',        'BbTxeuLjFoXORgQa/QU9Pu9iz1BMU7cP3lpjfLj+cDFi8QLgkXM7VBytwgIsTtJCMWY/FJiZT56q6Q6jSHyt4Q==');
define('SECURE_AUTH_SALT', 'Q3I4cpKQEhg80U7D3pd6UGz2vQzrXEeS0heTTfAB1L+wa5NdlaTyhm1IvnsGOjrFKHXScIzXPBBzLqylPAUvmQ==');
define('LOGGED_IN_SALT',   '3pIzWCdq9Fv/92NKWPjcnMuuKXIe6AqCGtj6auIQZyVA9M+SQRJIrq+7Ukq1jh5fBZIkkpBbXALj3oZ+DNdPRA==');
define('NONCE_SALT',       '0hnnfsQ8/exv9GVCBTEUFESHt00tlh76y/CPDruKlkJu2ibc7j4QU3UibCw2fRB2PY+h3QfxYd1qJuQhLHGYjw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
