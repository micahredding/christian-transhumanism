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
define('DB_NAME', 'bricks_xn_wp');

/** MySQL database username */
define('DB_USER', 'bricks_user');

/** MySQL database password */
define('DB_PASSWORD', 'roots');

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
define('AUTH_KEY',         'X6CK^J5k$XJzfV+Vv&C?#Rs8b^32|Be[,5)#%#L)<uVCR[;H^c7~<T_N?!P}(dm0');
define('SECURE_AUTH_KEY',  'w<M;yV8[bq1mvIFSHT|<{8c4WqX7q4l|wUBP(JH)/:JYWhk_Vz9]eZ^-`-)wS[+s');
define('LOGGED_IN_KEY',    'F2J>bNE:+b`TQmwRRZL{)x$&:0O?z-Qy4Kxa5=qmeP%K_CvrXE G,jfo;/3mS2g$');
define('NONCE_KEY',        'ZI~tpDMQr(7SD^VVqmQTJ8.CUBw]N1-i2w~GHpzq*R47g}AU[>WaCGVv54H?z?x5');
define('AUTH_SALT',        'm+^d9=:(90-)xCpPmkzY,F~i`[y{i(,G#!ih/_D-5-7WKZSsj,u;Pj]<Go#g37Y3');
define('SECURE_AUTH_SALT', '41fSK&@eMHOUx5[T{T{_SHkw|RgP|R5C`!<3xOW0dC]C3>Q4{E~K$+bN9BF;}G^|');
define('LOGGED_IN_SALT',   'jt1M~(EAMALETijj IrIi@#NuphW$MFbZ@VOPn0`jU.|La`lfxNu}oM*`m&wb4|c');
define('NONCE_SALT',       'B$:aSCc;1:Y-|G>|W,v2tLV$C(ap~~F2X?Zr;_{YG[I*_k/X=S_v}a.09R8^%9.N');

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
