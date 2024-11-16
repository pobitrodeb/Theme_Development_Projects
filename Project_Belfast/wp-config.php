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
define( 'DB_NAME', 'belfast' );

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
define( 'AUTH_KEY',         '1RIp|fl^%+P3Q]Vj#wxvJA[e$P@]d4e^xsM=df@ytq=,)m.;B;,NcxYd$sbC@^()' );
define( 'SECURE_AUTH_KEY',  ' haEAE+KjEjnLd7Np*%^02GkA@.<vWniRK8saQ:}N$Xf`qWt0#pp){Jru 3B2Dii' );
define( 'LOGGED_IN_KEY',    'FjcMrcq%U_mnV3_;^;xI%i6u^7Wzl{uQ2cB!j0W#.xE.O3,ug:qR8s?]1YkF15TW' );
define( 'NONCE_KEY',        'Dg,mVZ<jDysV=Gy{WYl^`~n7fMubUcliY<`u3-.c}34zwB;<K:]eHo+`lMW,y<VM' );
define( 'AUTH_SALT',        'L0dOF%V&?Mi$hI~kew`!I[4CSLAVl&Afyt,-;&(4m6bAxpLW&x{[`92?AzP%NRe>' );
define( 'SECURE_AUTH_SALT', '}(Gg}{Hv_=gIXr4wNm3^W0iiHQ}dOK*L1Anp3RjZ)!m%QJ~zQ]TUI>&EzPR,r5h)' );
define( 'LOGGED_IN_SALT',   'L*hj}7^_>e8UAyzlfP!l%$0K9.Qvdo5fDq!#u%)r]hRt@~HE+V>uZGO$-Wn!P 3N' );
define( 'NONCE_SALT',       'l-|L)UlV?wtBD=t8Ba%bMcqL{S/w^GoY^E19DJD769O(7o{= E?ZoGU$R9)DCQtn' );

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
