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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '739mIH2An2Pk6NfkbZCAxKTjdnDyX4pdvYAcovEKI5q0hxvEQqlZllsXE6CYUPlx' );
define( 'SECURE_AUTH_KEY',  'xzdxGDSZCzMplEEh9mkyTVIo6ZGIo9RFWXPuN24D9SxZnR6n4nxb65Af8SNGFTce' );
define( 'LOGGED_IN_KEY',    'VhXDhVTbOtlSQiPBEku06dYDMtXjm1FoYsRfNAfpyk9e4pNZjt6TUr2ckfmAJfEi' );
define( 'NONCE_KEY',        'qtJW40q2ak69DBHNvvjRI9ZqZmzEHusifpvy1Y2xZRhdYf8Xp8A2tTwcgVMSRLhf' );
define( 'AUTH_SALT',        '10ws2kvtG0ZbKyhSIUNFNFLNGFwIozgmKOLqnao3qsZT0o6iij2ALr6gXT4x3r46' );
define( 'SECURE_AUTH_SALT', 'U8JGZY13IxQbyIbbrnNblWrI4khzDGJHo65rILFJSDViubNPzZWTaByS6aw66mHc' );
define( 'LOGGED_IN_SALT',   'MhAQyYFoIhiBBDRRHrgkJlwMgRgQpBxiCRaWFqLklsk8qcEeUPdJGpj9Y3nRsyXG' );
define( 'NONCE_SALT',       '2nyPTJrglTsaTcl3nomUSfE9t3B5CWmBNtHEllblPyYNlo15uRgg8zlDO5F74qRI' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
