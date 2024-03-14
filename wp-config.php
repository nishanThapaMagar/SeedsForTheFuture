<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'My5JMSlUMHR2cVIsW3ghWDF0aE9gYSZIdSxMd0ZkYV83YjZFM0Q5L2VyL2V9KDItR1hVIGVGd1FFRTxgS2tlNQ==' );

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5a D 5%B!+1@Gt/7k+kZ[?IQ3R?JG%q=W&m2*|7[fz,|[`I*!*Hn?|/7ZEvxc-`)' );
define( 'SECURE_AUTH_KEY',  'JekF;{.{QgMZIk{Nh/.b.{29Z`#sMod%z/.@3%**,ht=1mA]yb!zkn%BLMYEbpOd' );
define( 'LOGGED_IN_KEY',    'yAq(Lv3+ JMv=ILA7Jk@/W_E;MT~L!#Lu]e`Wv/tu*)o?Tuu5{*-7z0pj18k>Ma5' );
define( 'NONCE_KEY',        'L$r.0IO8ku^H6.z0pKp5]G,GcY sUr$_HSN,>^FZ)5FnMl{YdBVIlS7IH>@8Wv(>' );
define( 'AUTH_SALT',        '912F_|+bbZ~3U26G{%H |d4pIF3[H@9Xc?W[C-d3<O85#XaTK(=wcFuS R9p?VY_' );
define( 'SECURE_AUTH_SALT', '}4%-KEq[PeG$>kV;si)bN,JI<Z>{ LOL_=0sk9o}#/^EI >,53__%8678L,c82+G' );
define( 'LOGGED_IN_SALT',   'IcZRQ25nV$]o0}d+b$?=d$-k$_>8LYb?rNf@E#T;A%EM#pQn^jHiq>C/Ujf>mSI!' );
define( 'NONCE_SALT',       'xbUJ$&A>UCCrVTP$Dw*_>gK){Q V+w[90YQ%gDk}6f[?7|6[UFxdD2-.:.NJ_p{.' );

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
