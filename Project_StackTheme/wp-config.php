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
define( 'DB_NAME', 'stacktheme' );

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
define( 'AUTH_KEY',         '76>S-Ze7gP8WRpR]U<_Y,T+~;MKx3O=eWqjOjd?F-ig+]j;g7*l9>-8ta+;?{0)]' );
define( 'SECURE_AUTH_KEY',  '|>kSj$U7Wu$1W}];posSRUHJjj0lHu?!JdjJz[&a|J;G:ATY;@Ge3ek#]:Dp.Z{u' );
define( 'LOGGED_IN_KEY',    'plCjHV7WhMK.~e*XUo 4)ts:&P>X(1[zB_`g3i912@-(vgQtXBA9GeJ)CQFDLCcW' );
define( 'NONCE_KEY',        'Vu`n!Cj%+4#MRK7[3Ng}zr.%G^jEr+P{yU^S8(N.Fd=/_0WrI;yn9|kH3t+@#k49' );
define( 'AUTH_SALT',        'hZm!R>=`pl?6%~2md.S|#]Q,Yz&TrX^k)InS!vexvlWjoI@U9D>``*DOiFb<IG k' );
define( 'SECURE_AUTH_SALT', 'vP}SAZ, UJ8T(>r}d:+Cq<^hSB;lDcYp{X`4qGlk=dBqCP6QMn(kW5rJ>%#.Jn99' );
define( 'LOGGED_IN_SALT',   'uvwf+1s:S&7-$53F )th?4FMr2g. X1u,6Ll |V%K@oH^s2SGQr]AP]_m4d)]y~l' );
define( 'NONCE_SALT',       '^0>@~_]!#|th.67VE:G{!yD(6W8<zD2zr/(ojUP?7Gh{jz8vlXZvL~-((3P8]Pji' );

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
