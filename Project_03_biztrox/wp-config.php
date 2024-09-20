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
define( 'DB_NAME', 'wpthemedev_biztrox' );

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
define( 'AUTH_KEY',         'Lg(ij. tK2:]I2xXLkp)jyzt8,aA?mL,R)2r(|F_x}9`(k.kX*8&TI1p?9Ulwy{s' );
define( 'SECURE_AUTH_KEY',  '-B_fYu*S@7|YLrzd?3|)+W%ePS;hM|Y.{`M_*f!{M{<~oZJnj%MG2~B*i;ri0J9/' );
define( 'LOGGED_IN_KEY',    'X8d;xIse$&dqh#zX`MM_<T-kZho}c!qvYl9;9}5[95(dX~Bj<@3f)S6*0I[yZDQ1' );
define( 'NONCE_KEY',        ']:%yLVDvvdhZH5Xs52{IiE+g7G8b;_57V4Ds=t^^M.hvAaPW2x_Vr/Qh+r3}z&^^' );
define( 'AUTH_SALT',        'whg1&`F6hYf.jbkvzzgL=^6/c@t^&b+R)VUA(~i9:%8cPSc<6W&8ksY|BA{Y,ZFW' );
define( 'SECURE_AUTH_SALT', 'tz`VrGDX3COc*4OIKloi[}g,}UfA;5I(x2dcah,r]6`QW,$lPE(U&W(pJF&Jdp}E' );
define( 'LOGGED_IN_SALT',   'Gnw^E6[xls>~7!%F@:5QC4Aw[j``^t(Xuj$)hB7=u8%.b9d.Ua.EaefUcF#{T!o+' );
define( 'NONCE_SALT',       ':9vG~LWh=^Lh$WJG!qG=!xUvzm@.x|QO$HTRK}87:cv(s?wQ)U5P?@&vJQU?I!b9' );

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
