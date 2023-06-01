<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'donation-form.rmhc.org.au' );

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
define( 'AUTH_KEY',         'x)^sSXI@(qt]>-0BcZ5uFIWyeFn,xrwbzy}D-,!6j[o~YnQqk}v8Jt!@hEpzCC^0' );
define( 'SECURE_AUTH_KEY',  '8vE|sqe,+UIrBMXx1xv-ou:hS&<(CPvofv>{hoy6|z#bD{y,Gx:gOCOii<iC2r4g' );
define( 'LOGGED_IN_KEY',    'XU%J.g(9mEKR=ZHk^POzN>jBq7x:RUHS[4g?W%50GH?72KYHQ(F;^ /mC}YfWm7C' );
define( 'NONCE_KEY',        'ba;DBJKK1N}VmY&<}mzIJvd rz.}dsv]i.De3$F5.u-e)}|1Y:ZSgWk%)SQAu$[K' );
define( 'AUTH_SALT',        ':tuipuIEe<z%*~GT}^zjx:JwMGb|XaXI ^>( *ygRcd`{=9|km;=Yg-fS[b|Ap,j' );
define( 'SECURE_AUTH_SALT', 'x-s2+4Y&(`|t};>b9`*>Wz1_BI*^=M!z1m:41vXDaf32o<dx:B-A5ep}c8R0.iTT' );
define( 'LOGGED_IN_SALT',   '(|<Kt-hDN737&/12x;$iE%w&*VSn,84LdfxtF%OD}uC*Q6qmUP|G_q{K<Sfofo41' );
define( 'NONCE_SALT',       'B/DkxW[y50;swBRYWB4h]wBoQi!M^dCBcq/$1,a/zqiok`ru$^#[9Av&%wPpp O*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
