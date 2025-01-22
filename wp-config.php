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
define( 'DB_NAME', 'wisdom' );

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
define( 'AUTH_KEY',         '0igT9ew@sh:e{%okwNwl}8sWiWE)n_9]}-TrqYN3K:vr./st^IQ9Xl0<t>>>u-5E' );
define( 'SECURE_AUTH_KEY',  'K{7sn ]k^r@@T*|JzMP1lG`_e#T9qmQ:}^Wo4:{Wq7lPrNk+t5s3qF${&!ET/k{A' );
define( 'LOGGED_IN_KEY',    '}WVLWPv~kIIY4Ry d]3n(T7H;3$nRp,A?CxjD%LKXIVz:mDJE?C/tC.QO-K1Iqrx' );
define( 'NONCE_KEY',        'yjlmI;x!>0KI]KE]}crm&b0![_ku5kaN+zCY|-ZT1()eO(T}[QJsc>JLv+|!ZF8K' );
define( 'AUTH_SALT',        'CB#v]+R7$=9Y`4a&n$NxL<qP]jS;1a8+^fM`8r~ua4YFU0hc8Y&!8>;Pq!om^/Ax' );
define( 'SECURE_AUTH_SALT', 'uls]bf>(uI@[|5(u}1PA{aPy4;;*sqZ;V](JF1|<!DUx7Ww ;nMN(v5hBQPw]?sD' );
define( 'LOGGED_IN_SALT',   'F2yFLyCy{%Z!sBxqd8|]]muQO1x8iL?7ko<OEPQM4Y!lA/R;lJ`6kDBB8r.Z:DS1' );
define( 'NONCE_SALT',       '._zz]1OfgAzO+Fp&r03-%#$fjQJtR<X57{%6Cp!^;u{= E+f}@9Em3FSt^$}VDXT' );

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
