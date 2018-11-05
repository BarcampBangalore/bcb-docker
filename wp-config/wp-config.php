<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bcbwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'example');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '|(a-d}=Kc~[{h/8yHkLdxRpe|JLYpJQ^T6d^tP-3|t,ygNy@r>HTe53gunC2Mplv');
define('SECURE_AUTH_KEY',  '.9y8lLXPr8cONI tA.5z(8+1_GVu4P[)|,w}smpMHI{6DDkU7pa06+*AIm0BIMmN');
define('LOGGED_IN_KEY',    'BRRIEa,?#2]]wq.?|FTM9Wegqv](V+g~du9CmDAl9erO6oD!_BP[$|(~3T24IY?W');
define('NONCE_KEY',        'bV$--Kz&LprsJsm/8#.ibmf?7C$jEZiWTJMu!4| +htRdJtOD:#+WyZv5*:ui+KC');
define('AUTH_SALT',        'WDWRTV_-jy.+8K|$E<KUtu0[`}LU<mQc,$r#XN|?Ze(nzn.yE5w(9!:Tjk2RF1en');
define('SECURE_AUTH_SALT', 'ozk0 u7t<Z<o-m#ZMB{Pgj%SLT,P`vB|l`B9Bn|p<dE7j5M-pbbD+|uNZHegw;Nk');
define('LOGGED_IN_SALT',   '8zhMza8Qg(7oxP2D)V|I2&t<-+vz_108$$F^V/3/8-^;T{A@blAocDL`)*!ooiUg');
define('NONCE_SALT',       'q<ddbn/;I(yden{7cYXnPpL0ga4O21hq `AdGg/#/N[A+ @=d.Sjbs3+9!k]5K$ ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');