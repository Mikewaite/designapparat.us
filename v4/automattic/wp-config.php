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
define('DB_NAME', 'designapparat_us_5');

/** MySQL database username */
define('DB_USER', 'designapparatus5');

/** MySQL database password */
define('DB_PASSWORD', '!6fXbgj^');

/** MySQL hostname */
define('DB_HOST', 'mysql.designapparat.us');

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
define('AUTH_KEY',         '0/eRSnXq2Cj1H4?Dy8R6PUCJ)6lG4Qf?wVwg9"JqtT/%FNTqHvmaH7JQXV2hFEAA');
define('SECURE_AUTH_KEY',  'XW:%ipE)xHGt!WYxhWyc&E/B:jI_:cX50_Xtt!4ZFlFQAj"|B^IXG42%aTrq4dJ&');
define('LOGGED_IN_KEY',    '1Q$7zK9lhTj/NSj%kw#Cf9Zyc9*e:`!o(1A"")7FG+Vf_l9y`j0TDn74tU;Rp4W+');
define('NONCE_KEY',        '(#O13(+&?Xt:0JmnDXS`ULVdu?Bj|BY*^PyI:bMWF$"bX#KmyWlFs29brDstos7:');
define('AUTH_SALT',        'H/P8amy+tsy_Te*Ccan~iN12:e2E&TJVdm&0p$nE:Vt(#80`kNe+Os3!mN`#tK7(');
define('SECURE_AUTH_SALT', 'pi*4OlIWG^a@2hx1%qrc+MN9P~3MzX%CJTd#An^klXj7av`_VnwSvq$ioSh&u9#K');
define('LOGGED_IN_SALT',   '4ZQXA;_oqwDw1*0;0kGL0itZtzD_+mGhB3DdD*1bsBtt9A6@n7m&_5Z2!*Sk0M`!');
define('NONCE_SALT',       '6Em1gdf?+9PqOd3n+bTFKitm$:"px$ud_Be*rnt&m2%##)H(mGjS5#|TO1m~UG7x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_iwmzrp_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

