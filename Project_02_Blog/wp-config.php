<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project_02_blog' );

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
define( 'AUTH_KEY',         '(0uyZwFayAds:|KJ;{*18eq6Vwq#_zxWN{ED]JhU#H} +d3i(# jr()8tbM-f`6x' );
define( 'SECURE_AUTH_KEY',  'Y=)4m?;.OjV?=q82),)v51~mYkMs.e|B^%z1HJ-oea(3Fgm0B+n=k,^?P!qpc<SI' );
define( 'LOGGED_IN_KEY',    '3y9I>$m+Gjru8-Bs.HK>do$z;XSoh7l!(^j`rfc[)l~j(ab/]Of^=0)M%X4{eB1G' );
define( 'NONCE_KEY',        '!e~7fTsnLb<c=]X9D;;K^0##?~2+G4`lJe` Hpk[Wb&B|?b`LFKhbJ  w$f4~,sE' );
define( 'AUTH_SALT',        '3<nCp;&FbRpR:M#wSO*;@F~_k+P%}$Us2I!L-pd8`NrJ&@@}*L]da8mUg2,B2@,9' );
define( 'SECURE_AUTH_SALT', 'BRX?@{^j/AH>ZSmag>S:69?D{,!jXKJRP#EdP-tpxgU*Boz|T7+/h8TJT|9Td4tY' );
define( 'LOGGED_IN_SALT',   'Q:ck%+EI,T6.W>G*mH#xKx<CO|>jDIMAbHRnij7Pf?L]-~#$,Q6Ov/Dfxfhl6Jec' );
define( 'NONCE_SALT',       'KYP}/iFxc|$LUZP&&CovZw%s.A%*<PBeLb_Wg(%xHhZJ&hj~)IEV~1vZiL[1&EwW' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
