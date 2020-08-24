<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bitnami_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'af61a3adc3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '94adf5f649ba7a74de6c8258d74512c7dee0e0e093992467daff6ae88c997957');
define('SECURE_AUTH_KEY', 'e7cf527fa8dee5225802ed92a3787b7498907d4ab79f9d2f5b6843267aa64368');
define('LOGGED_IN_KEY', '85fee487cc45b7782780b66785dda24ffdd8a9ff063f4b4077595bff2d3b53c8');
define('NONCE_KEY', '68de9f1f2820e6fc9bef0b0f15f456a3a33d8923012bfae41e9fd521ab76d5fe');
define('AUTH_SALT', 'e199727b4982f6ae662186d39decf7d1656615bb29529a01384401e68ac51127');
define('SECURE_AUTH_SALT', '25f1b187506865353e82b5786c7c02915b20c6c4301e01375f1f690306309476');
define('LOGGED_IN_SALT', '099c490eb91ccef4570ac33a3db2a76d32eddf043fd257c4c74774bc7ad9e430');
define('NONCE_SALT', 'c22f8c58a247f7b31f1671dbf7dfb9105d8319c8522db9c3d2864f82aeb1bc32');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

// ToDo: Josimar => define('WP_ALLOW_MULTISITE', true);
// ToDo: Josimar => define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'josimas.com.br' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


define('FS_METHOD', 'direct');


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/

if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
            unset( $methods['pingback.ping'] );
            return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
