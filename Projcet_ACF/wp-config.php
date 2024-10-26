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
define( 'DB_NAME', 'projcet_acf' );

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
define( 'AUTH_KEY',         '.RWHIXuf@}R{L7`MJd)H,Sg0;SzF7Y{d6%{gt%}T$$A[69QKM%9Bzby9,W}hi-^g' );
define( 'SECURE_AUTH_KEY',  'MT4/K2~7%tAKu_KYe+bd>5#XA6dCfB3 {OPG]TC+%>a52x)n XB(Ol/R<,^}Z({v' );
define( 'LOGGED_IN_KEY',    'c-5gDAiF*am7;@@FTi#} nV0}@BTaK-y9$Kj8j+#iwSXnLIu|%*<(TA@1Q3dXLwp' );
define( 'NONCE_KEY',        'q=:V8_n^/^9vYl3`2XmmrYSlCKp!|j=SQ>UR[R~g}>2:@[s-R!Y5c4PbT/s=DGsI' );
define( 'AUTH_SALT',        'xZ)HK>{<+_<p}-OC kt-!u2mL{)GbC<=zQ?<}mg^AX{Yau#$lgZW2>&h#]v&2kzp' );
define( 'SECURE_AUTH_SALT', 'yp9Ou4KGE3=hlTEXQxZ4{FYV3vAF67!E4.MWs6rE3NcCDp_IsWTq~3vs1HgahI m' );
define( 'LOGGED_IN_SALT',   'Uj:407?_[;0[+I%@Jw;0* ,3NWF]Q#B|bOa;3bc$9w;j|:E42S>&U4`3q7Rfo+|{' );
define( 'NONCE_SALT',       'bp7cSI:.z%oG)?w6])4fVcfZAPiNa,|z=/;bxNK[Jg@;l!6Q<,bQsI[Uu-; -}{^' );

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
