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
define( 'DB_NAME', 'revolve' );

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
define( 'AUTH_KEY',         'hp1~=r?AV@OgD Bc]<Vs`CH%?anXl8AtY.vW*lgYb8jA6e7D=4Oq^_`Pg.;GK)ng' );
define( 'SECURE_AUTH_KEY',  'w,,S%~h}{PFPXlCtHb n+j){d?D16vlyMJolbnjgk`{a)V{P8DCs[R(rh}FjP.ZN' );
define( 'LOGGED_IN_KEY',    '0#B,ae]xpwm.tx^vGRU$,DtcluP5$eyh/6,e?=6*3 2kNDcinnf/) 4+0=j?56[m' );
define( 'NONCE_KEY',        '!|$csxAT5U|w4=>r;f Tf$T1sWmb1|mwTb1Z9ge(=it&|Snz?$N(q8}R.&/u ^>2' );
define( 'AUTH_SALT',        '8y+*K>i-/p}Y]:1/{.b7(UAPNTn-u3#3zbz&,Fm[tt 1+)0=RV&N,xRG3x~|2rNP' );
define( 'SECURE_AUTH_SALT', 'B$#:;rK/NdW2F2*CF+9HyDuFAF5a?V&GTwvy6zeTc.:+~nE~.r`%XO&4/2jHe)SK' );
define( 'LOGGED_IN_SALT',   '_s8)^L3/Q.C`P]hz6D*dRlrA%$l73n>S,)T})pFAv5e.!ZJE+}_k`@ktU%i-_dr.' );
define( 'NONCE_SALT',       '~&niisw2RM9%o2!7Ry=G8OC{]7{IImqA{r#?,oMjA/u6G)Q>`CGbEna1J,~8~m}y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
