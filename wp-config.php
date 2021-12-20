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
define('AUTH_KEY',         'mWJjnhSKcK1s7+jcA4YbgkBgMeJToMtViBSAEsS8mcTBwe9ypLuMG2c9C96zJmHawwppK4qxLMyU9EJhF4ACHQ==');
define('SECURE_AUTH_KEY',  'ykGJ344c946Xnf9OQWlzLeBaFGHVURsnktvnxOHCXA7TCkomJVnKkXSKiN8U2Qh1zWg1vMIppD2em5Z0sG402w==');
define('LOGGED_IN_KEY',    'GIUpmfC9KPDiU0Ahn2Z1pqDy5krR3bYuSPdXTxlD8G2t2e+dRb+oQnR7tIsJzx2lNNyWte/jvsgH2kT8eLWDTg==');
define('NONCE_KEY',        'OpIEyc4M2bvfRKPQFjhVrCK3HuyGtnS4Rniv2QHYjtRrY6yBtbguhKuMfYNKON15NCry4+FBkuMO7GrMdZ0Szg==');
define('AUTH_SALT',        '0VE/VR4ZVpzYBm+Pt/XIs7KM1OFBsSz/epbB41Rf9r+5iN90y7hDF1z5dPOge6Fy1KWocC58um1x0+ar+/WKhg==');
define('SECURE_AUTH_SALT', 'GhHiVsJjW/sJy9XbmGplug1seaL9j6ksicKfSCZQ9Tabv+pmnY5CtwyyIM6X3Zsu2TXW0Z5Uu8wyhF110yaFoQ==');
define('LOGGED_IN_SALT',   'EomjTX3UEeK1P5283x3wICzyGo4A+sdJ0MQ9F1TDMxTVdTdYrFAuGwf7YCVbM2uKfOE5jQfCAW0MwqyB4p9Gyw==');
define('NONCE_SALT',       '9Bj0M9775FFWlYsrT/U8jn4+YzA2hU8GX68VesYfThSQfpd7hG7BXhUTxUPyN03ndtB9XT15fsMfofDFSVa97g==');

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
