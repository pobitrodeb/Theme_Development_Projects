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
define( 'DB_NAME', 'halim' );

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
define( 'AUTH_KEY',         'jDZIBbKb)D)6=ja0daLR xthm^4h?GqdjfA*]TG|{z6VXr!6y~3)v@{rQD2U(<br' );
define( 'SECURE_AUTH_KEY',  'mbIvT=(XJ!L{i&/QrhIJl{Wan(1o7y%J$FZ7Sc)]Uwjr?qp~<zv8@@Va~C+/V6co' );
define( 'LOGGED_IN_KEY',    '9YG?VfKn5R>Y<Ou%XZ0fe[w=cT!J>msLFQ/Rp~qx;B,W^!Inn=4Df9.zHnhz}y-]' );
define( 'NONCE_KEY',        '*&OGKDus9x39?ZPS.wMM(CG8^I@+eMgA)^BZ#ln(3N@: E0]f|i!kXA7PM.l(c$:' );
define( 'AUTH_SALT',        'n53{Ld_B]kq5uUA@d;V(]([_mDVW/L}7a*.`?O?od?H(7wO>p:)$({r0Nq&`op&_' );
define( 'SECURE_AUTH_SALT', 'f*2aX82pLy~7cuWF,|99bK]86{7rIoq}%qv{E_|COglyUUH}O`3k99>U=TqMH5l:' );
define( 'LOGGED_IN_SALT',   'IHTf@lr`t4~u>_CF![F 5$Gv1/W8C@{>LGnh[c6VVE*h^i6eXm{h2*qA5@9LI.O{' );
define( 'NONCE_SALT',       'sLHc3uN!%E*5F&0A~rGwQ5/VDD#KPKvMG!7mZ0gooofi.Bd]~2#LY] B7=E?DI9i' );

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
