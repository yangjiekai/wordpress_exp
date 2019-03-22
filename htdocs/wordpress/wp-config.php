<?php
define('WP_CACHE', false);
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kai' );

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
define( 'AUTH_KEY',         'Bh3?oCNL`G#!:KHvZtK#1X~cz*W]tBkEHp(?|Z_?vY-QiBO[ehcR$zsNBgur7G$>' );
define( 'SECURE_AUTH_KEY',  'MiQbR_BT@Y}Z %h<R$,*4rwhMvcFBjCrdU?T[c96TK,c.#*lgEOEQ!mQk|[%3o6Q' );
define( 'LOGGED_IN_KEY',    'QyP9C$F`Bj1Y.XvF3RmBpY]&HWwWhcdW)#j7{Y%34mBAQpE}2AY|jz@tHz]z(g<!' );
define( 'NONCE_KEY',        'DSN[aFQgAb,}PzXf9 dFp49>_jl/L~RcYk(PNW}V*0,Ts: _E^hBj,,(d7j =rd,' );
define( 'AUTH_SALT',        'xBa:KM>2:pr>om9l4Zt){IgiK{(o289U-l:FeH[gVFahoS{7bi(i<~x38^cw {)2' );
define( 'SECURE_AUTH_SALT', '{s+ ERDtKLl^j*xD[&ounaK$xFtl9lq+Pz4(sHV@tcu|(}4R<rUNaj7)Y,ir7A@h' );
define( 'LOGGED_IN_SALT',   ']Z[GnZ<W$9IeB&8oNg:}cBWsHxYx.K@h94=&lCY^3 _4cv>9Ix>@V[bq9bc!,s|M' );
define( 'NONCE_SALT',       'z>F3_k.X(SC%b,}/fcs#N/@`H?2Qt,FP3Io;>79,1Xj~/uVU cNBKsrR@EMg@P+b' );

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
