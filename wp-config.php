<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ABWMS' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5=jzaMLy_;jd>KAtdyyZYXU.P-AqVerFtokap$n&4syrt+3R[3w7[Le0asG00]]y' );
define( 'SECURE_AUTH_KEY',  'Qz_^T;u|]CqV_ir^Yztp?-Tb(ZK[,a0  )V*9y;aS3.pUP&9#cB_tQ8z^TgL`@,.' );
define( 'LOGGED_IN_KEY',    'B wUegP3(A=`wB]CeUfGGZEJTEZs7- a[6p|>5ss%y4=>m{jiW9~Xu*`B5,yp9#C' );
define( 'NONCE_KEY',        '9I{I?GKCl5`TG#%_Blaun,mN/l({Z8s<o>8fjT|SF4rHzcA-0STh)LAVN:.H{RCk' );
define( 'AUTH_SALT',        'U[`bBQtD`MM<oGdZ1X[{L$3<T1pvM2n wi7zMkyAl_Z[XLL^Wn3MAQ!F ;rA7nM:' );
define( 'SECURE_AUTH_SALT', '53$~ r6&UoO6X%`te^dI!T<Q,7v9S2:i|P5RtQcTBs1E@DU|3;G51`x|w]<]V7dy' );
define( 'LOGGED_IN_SALT',   '!h4CV!*^g`TXOjm2thgdS$!=gQWWM-1,+J}|0oEAT8e sYUc0Bi,qNazdW~_&B2?' );
define( 'NONCE_SALT',       'TzB@DXT%rGVU.7mN#U~v u8t1o&|];9ODTdqjD#QHh]M$07|XHr~`?3+3#fwRD%x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ABWMS_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
