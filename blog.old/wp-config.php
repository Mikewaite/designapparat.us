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
define('DB_NAME', 'designapparat_us');

/** MySQL database username */
define('DB_USER', 'designapparatus');

/** MySQL database password */
define('DB_PASSWORD', 'q6!VP!JE');

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
define('AUTH_KEY',         '#G1J`LJP1@W$$`7Du*)o1e35d!4H+ktk3_Q;Naf~w@h_)RV^(vMmy4?pj+%4;w+!');
define('SECURE_AUTH_KEY',  'YtSlg1+?gk#iugx2xm7HV%#GM#&)Xj6nebI3~n3DcL;8%I+OT8Tx&z!/Q&"V0:ME');
define('LOGGED_IN_KEY',    '`HX`H2b7A!r*wN6lt:w3(+lT%95x#etH?%e|15wWfexPu1$N8UD%hV~Kc6&eSrwl');
define('NONCE_KEY',        'K&3:KmDtBtFAWrqJl6YlNMrN;Lr!#8fnn"#?8Ol8)6eP1V_Yy8~:vO7C%|%zy2yD');
define('AUTH_SALT',        'q^v)QV10fUoua~I3Oo#Pmx!91R~4^4%#jdZ(&Dq:odS55CzeeJ#X5O4?m_1B+Xse');
define('SECURE_AUTH_SALT', 'eq4dHKko:GkhD3$%2CA_QL;%96AqgCQ;i$5c5m^R^Yn6"6NWAJ!3dQw#t&brB#Jv');
define('LOGGED_IN_SALT',   'A2l$?IFo/s1nJYuE"DXx%QA+uAHm0C?NWZ36e~/TeB325roc*u5IAzA3`H4_la*S');
define('NONCE_SALT',       'qJeJa|hG*X71zj+oO(Bn2BUTof9Pk:ZX0^K&/6ak(R/?KV+(vfY?O/WY2K4)_%ij');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_awaj5n_';

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

