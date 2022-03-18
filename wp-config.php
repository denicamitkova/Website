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
define( 'DB_NAME', 'redline' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'bI}`jz}#Rd)2%QAgZ?BA<.8T`n9kjqXPt1`D:.8:!8p`],,~h9J;]h.:M~|zGSMH' );
define( 'SECURE_AUTH_KEY',  'WjT+ZqI@9s0!Jvg4T=?(BKf^-OSM}xNL`D3i<?Q tT0L2@r/YGiR J~%FxQz/uN]' );
define( 'LOGGED_IN_KEY',    'UCI*`!Y[`<[U.(eN^m|IR)uou@rO=(6_qe8p[8Vq~Bt+b2qD}lmw3*e b1GK{$UY' );
define( 'NONCE_KEY',        'o649Jo(<]W%]dAhO<.G!qwlp_(zdEv{.o}%~+UA`4c]9X@>/Z`!(.P}LRC#>?ST%' );
define( 'AUTH_SALT',        'oYd4KL 57ek98@F(!nb<HTu(d%YE&:@bff!x|/]Pcu@I=O7J$(9L&U|gy<~kT_3&' );
define( 'SECURE_AUTH_SALT', 'G_4d7~R&j5%D0V($:!WwNV$+p%k4FTh;E!}KRVDj0t,eX/z?_V/ dTv1D>`^PkQM' );
define( 'LOGGED_IN_SALT',   'j{(F1xMT}3wnNkbxuD6(]Aa|Rf:z,NZY_`?X+F2^9.cGD,_[|?yldVd[?gD=`HUu' );
define( 'NONCE_SALT',       'l:wtIAO@04sF-GJ^93a.^ FeVKbPhUd^o1O^8L!mp?~X[0-SI]9!~1ljc=0J&bv_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
