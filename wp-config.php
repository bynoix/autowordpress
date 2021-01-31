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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'debian1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rooty' );

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
define( 'AUTH_KEY',         'NaAf1?9cG+P63%|VNK42baL ep^wN`)H}_xfB<0.3=r=qBZ[A Parb:U[^/_|vH~' );
define( 'SECURE_AUTH_KEY',  'hL}c{1c^UT?6hCgLwr{x*3</5v!CH[-U!s.c,^059/!P^z#Tlhqx8!j1+B[;v19i' );
define( 'LOGGED_IN_KEY',    'AlC!-~0/r`*Re2$(B*Qalx$N;PO)$,_6D%}sK)~roEF6$=H8?#3B{qv2P<;W0x^5' );
define( 'NONCE_KEY',        '*(R,K!`DD(DT61QhwK}lv9fe-O`rd*3+fWIy7oMy<( 4gILF3;:iG/32j-n@<%(3' );
define( 'AUTH_SALT',        'b;!)tFrqQy$s1-N6%}tFEAQn-svF>5yNYyqlio[?N5IW<VR|Ro0S){,=R^3V|m^C' );
define( 'SECURE_AUTH_SALT', 'Tzg29/0v/gD-w.+A zc/ka8.S=a|p$ik1ius_Ng6MX}VGHP]X7_2dGo`TC$5[gM2' );
define( 'LOGGED_IN_SALT',   '=c.)2@s6:^}?AqKJ?(I#/Y6pluSUX2SdBb]jS}<QY4s:0@-)?mUp7_%lwgU.G_^u' );
define( 'NONCE_SALT',       'y_|OGYL|z~SNhu$8%(]W.Qvc1H$hhXzBWs*)<#`uaB^Ei2iRes|#YQ$6r@;T>N@q' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';