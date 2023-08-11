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
define( 'DB_NAME', 'arunportfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'N]mYsTnyEc|+wvD,j/1p?-RLwUIhn}v]s19f)y5w:<EV2~M?yO}/Gy{*z)SP_UNT' );
define( 'SECURE_AUTH_KEY',  'w$`T:ow=csU&[eBmirQq)P:2i[Tdcy`-:e*E9~j%t&2$c6v=qsjEG6K[:*+d;Rw_' );
define( 'LOGGED_IN_KEY',    '&ScyR_kkAWU$3}[~!S^oNKT<@_/@8uhz9x`*$/d(VP:S(~(v[P1xLL%!;}CEvV{*' );
define( 'NONCE_KEY',        'kG5OBo1jtaCU#SvJlk_;BXMF9ZoJ*rjuu&ms-x]E;_X[|vvI*EA)8twZaSj]2nei' );
define( 'AUTH_SALT',        'ac~^~_>V~cy(]3tKG~YJtu#{mtCNhY=9!GcRq#:Z:41L:*06.D&=/`x@i~27y!,)' );
define( 'SECURE_AUTH_SALT', '?f6<gjVGL.{1LnIj-k6r&sX!ikQB(jz<7Wpku4I?Qs8gBExqn8{`(EeW#z7dO2>p' );
define( 'LOGGED_IN_SALT',   '|6Fg$^<szR~9FQi]x%wgMJYT9(e}AP=)vN<*DW<<w0j!hYhH/Pml=3p1R/g?Grhb' );
define( 'NONCE_SALT',       '<y)tR(S3ibeB*d2}0)xl~tX4>absf1W2&oUM *4/o@NZc]sLNAjT]#[7w@?k QQ+' );

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
