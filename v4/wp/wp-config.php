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
define('DB_NAME', 'designapparatus_wordpress');

/** MySQL database username */
define('DB_USER', 'mikedubs');

/** MySQL database password */
define('DB_PASSWORD', 'mouser');

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
define('AUTH_KEY',         '_Y%0#Q_bfb+18!+W&YT>}A-l3`-Pai|aJ(8Sfqfc-ev`H#W|#Ro>Jp-t6al{K4|Q');
define('SECURE_AUTH_KEY',  '~0hWb32ys>zf5=,Xx{Co}0P{z-|xyn]NVpU`p+[0MV!8Zzerr.dhoM&2FgsJxrs(');
define('LOGGED_IN_KEY',    'mCPx%APuWj ,[wV[m4S)CzAHpuEd_.VXp=j-SXlZ<.1VT2^}q]|)hY=NJbw%-P-v');
define('NONCE_KEY',        '-TQ6||1dr6|OY--dsD(]!ETY,)8&==D,He08N, EJb+A|EyMars(^5ZeYT=+F)Hf');
define('AUTH_SALT',        '1%2pquQ0J=gEeG/zc dqVkxu.+Q;r5Gphcx5-]!]_r9z|,mBe*Wa+M<<OM7++dDP');
define('SECURE_AUTH_SALT', 'utRe^?aB@G+{2OOy3|9>-${63~R~<t3vi<Af1[`=&pd_x=0fq&|qMb$~,;KEGW#Q');
define('LOGGED_IN_SALT',   '{|~W~rlKIY|Zu+L@UM<6nB%nUX}6o2dBtaBZks.0xh!T@BlPMi#cUgf@<f}$j4!*');
define('NONCE_SALT',       '8T#n9H,Odx_Y#B-[g0alz+-&_IEm{=Q@)xGlEKWTu:-%r+eE{(ri>r6;y)_NT!0Q');

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
