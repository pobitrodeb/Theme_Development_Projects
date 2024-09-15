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
define( 'DB_NAME', 'project_01' );

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
define( 'AUTH_KEY',         '@tV:!3OF)iTS59mK(~IQqDB]FMH:; F 8Dt47{,pA=w?a)8w}Q1SB)i$ l;1_tuY' );
define( 'SECURE_AUTH_KEY',  'rwc/{jA &VFSnos1_J{*eZLb_Ia6r{(6:]jcxeP1.WSg4:eLdY>?[rA2O8lZxm5G' );
define( 'LOGGED_IN_KEY',    'rN_$MJ,zZuHx*?B%S](L<a*K}% 0_{)pbtGF,{V-p,7T>bSn`L/n ]%]ST>wUMzk' );
define( 'NONCE_KEY',        ':,.]1}jax1>W.B5}wBecyEvY{3@*Vb^pc%)*Y?aal)@`I$}c}`BuzZH6JY3Kb4<u' );
define( 'AUTH_SALT',        '6XYr.vb,&pxNIA-#H<p3QtNo_{A0)keG8EMBqnr2%P.OWd#t+jdIckR?pq7f>eqM' );
define( 'SECURE_AUTH_SALT', 'i18P8y2cA%f4%AFT_51%bVvu;d{O6`Tu>AXal_D8-&9Exvf3iPQ:Y=H.wlh%@4)n' );
define( 'LOGGED_IN_SALT',   ':,w;Q8N(^%mj0uCzEWA,K{gZV>&bofDh2ftFdbd9|1hI_,oFDeW, sE<&gT n9c+' );
define( 'NONCE_SALT',       'DQ^j n$^|Gz[f+6,9@**h})I!La[Lq}d>E/`,^S$kB>LCax0@YwwI,$:N(y.AJC2' );

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
