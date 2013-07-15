<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newmanbookbinding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         's[O0sW@p#xc;t+62@2fu^Z+E]&#Cm0D>ngkn#^V.6&)iA/Nmh8]#JUgy#Wt|wSGa');
define('SECURE_AUTH_KEY',  't 6(=4FHrXDGj;gq|2qs|I]|A&$As*ZLE#|3Cka[-|T-gH{Zze6+xX7$ Bp# jjY');
define('LOGGED_IN_KEY',    'b,/$&&!:ssbt>s6?|`O#rJH1BR.U{+.-I;JSfwiFachxPd`US-7,+9ogFr+G-s-+');
define('NONCE_KEY',        '[THr ?I A(~s+DgSh;C6eE|w0nM)4$:m5R**~-Wih;_=$pK`]^G,QcM8]uolgw2g');
define('AUTH_SALT',        '9XZy;%W+yuEHXsFyO2|_1w9,G-NxinMI1+;s;GDD!MeB&.D[Xz7X,,p]F2Dn}~0;');
define('SECURE_AUTH_SALT', '74603:%=~xWchh_O$0<oOyT@!X8& ?+boNO<KpDnsJ^<UyWf}:9{!H%l<H>Q^6XG');
define('LOGGED_IN_SALT',   'wCxfg%XOkernDM?XlP0+9~V,x|}~pn-Q=|Ck#!p!#0I1u V2FRx^;TP&q._/KT4?');
define('NONCE_SALT',       'gJLNH:^ibRiRAdj?UhODdDY#gg=S@^4S/GUo<C_^X-QiXBDQc.T>*I3j`(V^xum/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
