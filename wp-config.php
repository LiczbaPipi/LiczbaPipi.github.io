<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pipipipipipi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NWjdljWCPEC4e1toD8qFzHG1e4WocOOhPYKv7iJyHkavQYQYKI5VXYbm1ZZPVi1K' );
define( 'SECURE_AUTH_KEY',  'W1kKJqd8Bh3LyTMJxP0iB1eoBrYly5gdyAa9Wlom7VAbbpxCw1rPur8tfUBqvRnM' );
define( 'LOGGED_IN_KEY',    'T6iRJEqn3Z7TgtGjJ7zIK5eDX2jPb7IMNhlGqLTrunTr3fYyFdUTyJVs2etgX6q4' );
define( 'NONCE_KEY',        'YuCgkt1tHjJp4WwoKZcCtCAiZ9LDCWQgHVlhtWa1TggZx0UYyOXRfttQMhQhad2P' );
define( 'AUTH_SALT',        'jxGd7tkfMTvH19etl0ftoaFOmlt5HpixUsY1HDYxi1O7naRlXddCf8x6uMaCR8IE' );
define( 'SECURE_AUTH_SALT', 'flevtLG2SWJiAvnpv2Om5kVBT02vnJrAXdtyqasmLxg59IsZaKMoAEG4SvfXAKKo' );
define( 'LOGGED_IN_SALT',   'HIEKQlnDb96XCA2ZVN6HzmlxWUQfg1zLOGVleB3nbHTtENVQjyC4eKuHAJ4s3yYI' );
define( 'NONCE_SALT',       'Dwd4dDJphbjzcXaV6GEAfwBktHoGWjIORqqSX0wcEekrpmwuw6cQyhDFXs0NLb1s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
