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
define( 'DB_NAME', 'startuptheme' );

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
define( 'AUTH_KEY',         'I@qIpEsBeBm(I-Jv~G_zZ~ML:JiTkJZ-qzl8XT<;<*CHBf6PR`BU6tG_b5QUnTRA' );
define( 'SECURE_AUTH_KEY',  'c5.s!Y|SiBLNiH)6/INfAZ%0_|v$^sy:xGK]&`DD^@X#KS%QtPK8s?XL,0tl-umy' );
define( 'LOGGED_IN_KEY',    'zKj7_ &h3x9I;o!Te4*oLR=q #{Gqe]f>5!/&R)rBl8yl<*lTrP.Z xedfd<OpT)' );
define( 'NONCE_KEY',        '3E*tuf~QnCPs6GaIOhvaS/kc#@&#S~-C,.F!P7?a+=#A^b1z:.43>UCLV`b(8`Sy' );
define( 'AUTH_SALT',        '@C3W]j9M!=3>%bsVPk$GeT660!S`)IIM2jN7k0*2z[bSTgTvLXv53cyU@q$_|Z5k' );
define( 'SECURE_AUTH_SALT', '`qu9tw!AgH19yGIU<1GQ&VU&1Hvrj=(_bgi;8Yo(g2y9X-zs3p@mX+j0$F|wp93]' );
define( 'LOGGED_IN_SALT',   'f`%G@s?rnf8neqm}IMW9 ?FMsOY4K0xr@qZ{D[aS1pdcJBFuwfnEk0ufXIBl1F#_' );
define( 'NONCE_SALT',       '2f:U`x F[pIs!cFut4bhYShmkcHh>~i#!2PIVO>hfK?^mE:UP=cLS>&1Z=9.cqA?' );

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
