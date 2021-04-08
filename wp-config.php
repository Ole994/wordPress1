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
define( 'DB_NAME', 'wordpressfirst' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'StZQN.FqZ[}7]*2CiK#]_=j|DOBxE;sLY?K7S#V,vze>H. F2r|?<o:+95c>Cvw|' );
define( 'SECURE_AUTH_KEY',  'F4kPmYvh}<C^qLrp!/:aL5]ddvF*9|kqZfmVolsJjGfveM.s4gz5EP;*M[*i#{$$' );
define( 'LOGGED_IN_KEY',    'CUTW@FaO+pqTy4>9,KgP-!uX7c}B:xFLgn@/1K(JCCl(O!M53*W{~~!_!ck;R|&+' );
define( 'NONCE_KEY',        'hPcJY+(FH![bXr/Ns63_m|M@zT]%8m9)N/=3_$XtP][M~xrZ&,OkE&aN8qSNGv*p' );
define( 'AUTH_SALT',        'jn=IU=W7~uI^-C&JCjSyIStdB9a+tfhbLgGM@:w2 Z7IlqGxb?-(gDvb/gi_9ri8' );
define( 'SECURE_AUTH_SALT', '2yp?x)S{m[IO)z]% /)YIfa2v2@>rEzC6Nwh:o#<: zVSLyUnP=XbT([<d ~,(oq' );
define( 'LOGGED_IN_SALT',   'an?Zgdv$itqjIVm2.QsCPAA}QEky~yYBhv%{&}OyolFaZY/ Xep{^U`n@4<)s+T3' );
define( 'NONCE_SALT',       '( jj?0nWbw?Uv~$6-BJ@.n7 y]G&v.S/[GvfeaboFV I/@^G*M.ki&lH[?h6uI5j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
