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
define('AUTH_KEY',         'GJDNrpr3cxuOqmVN3djdfvw5mKN7qLg2eVowOYH0RngdFNL1l0bVqCSpEh/mAvdvBNdSZfDUvd4UbUaeWbtjRg==');
define('SECURE_AUTH_KEY',  'ffq/UsuPaSHO7XXfvxcuR7TTKm1l94FPQz+IuZtrIDa7MM3xjBjeDdlOFbhqxvXt+R0vcRN2Q+nuinw3/+j2Gw==');
define('LOGGED_IN_KEY',    'aKQKlhDR3XtsEHGqQdqvK25NDMcd8APjXAk7p0DI4Brql5XOhL4qRMjZigV/3HTh0IJLcOYZLiKcbs/pVGX/gg==');
define('NONCE_KEY',        'Eg78QjeOYP+8gxWnWfw1uz7c+vQLncZJcXJqrMZ9ggFKOB7fQrk695FAB6jzLJ2P146C4Etnv6cAojKUkF1ZEQ==');
define('AUTH_SALT',        'g1FSkzdDN9De5LOJo+tPpgtUXojg01MHuCGVgEwKHTsPn9VbMedIL8PVzZuska/9ivXD+LIeKbW3fSoExSUNNQ==');
define('SECURE_AUTH_SALT', 'uhZtN0U/brXblIYBF2ZAhCn9QxjsQvtDsna7XsL90awl/V9oDd8Mw+wv0inQRZ1ZIfF+Sw3cP0tMW0YPMpPjtQ==');
define('LOGGED_IN_SALT',   'BzTx2F9nhISUEw4E2twOSfbHTm+IhRROXVpXGCzlah2FIqRfWtjJKEIXeh7swEDCPcimt90xDNsXhfZQT+CNIg==');
define('NONCE_SALT',       'gsN3ouWkR1HUZK5Nb+moO95jS6TXNkFa2EARQ4nJkFwHElcAsiR15rriuCzTl4ANk4eFrrQKTdlK1S5Dp3nW9g==');

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
