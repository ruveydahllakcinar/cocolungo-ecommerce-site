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
define( 'DB_NAME', 'esraden1_wp657' );
/** MySQL database username */
define( 'DB_USER', 'esraden1_wp657' );
/** MySQL database password */
define( 'DB_PASSWORD', 'GSp992.!ge' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         '4pjf8gijmzde0f5fyse1joofznnz9v9vs4lmz6c01juzy8ufzt4kcxx4b9e1olgk' );
define( 'SECURE_AUTH_KEY',  'xwdonu0y5oxvaww4rtsgneqrfhquczowdqknb0knf7kci5p6b9bcjotogouikw0s' );
define( 'LOGGED_IN_KEY',    'fupppmte6wkp4guyobmdpus7iwkt528olf8dex1akkazojngsncscrwndk8azsle' );
define( 'NONCE_KEY',        '7dfkmtaxkfxziz2dfpw08vmcotk2kqg2aqmfueh4glsxoysgvye1djqshfaycnkd' );
define( 'AUTH_SALT',        'yay3hx1ow9myvgokvt9jlicm0p3bap5phka7zly0kyj9ihy9mb99z74301rjgzrs' );
define( 'SECURE_AUTH_SALT', 'xq3yk7rukbfrcui5oedzbdliqbng3lkk5qvxqlaamv5xcltlh6ploerpeby7sges' );
define( 'LOGGED_IN_SALT',   '7gt0zv7ihwhyjukzmekeaz1nxkf7sl4x72pwpbfwnotjecxvgha22su40fozmikx' );
define( 'NONCE_SALT',       'bbpbuomosv0auupzpmxrxxcdnm4vfcfuf43hwoeg6xiruhcq7t9um7zz6l5ibnra' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0u_';
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
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';