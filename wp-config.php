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
define('DB_NAME', '000277970');

/** MySQL database username */
define('DB_USER', '000277970');

/** MySQL database password */
define('DB_PASSWORD', '19890208');

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
define('AUTH_KEY',         'bTN~],9q=~@)g_ShPbg7}#^-+ef}}IQ@qYAc1sv$SZB|~}Tv.2p|ads]?j@aN+CV');
define('SECURE_AUTH_KEY',  'Om-`dA*{XX}-`Xdsn0j2!;;G^uB%+c70n1E^!gLUzVD:tM8[8+ u$HfH(le8Xv|+');
define('LOGGED_IN_KEY',    '- I07MQ>m&e0t*>@|?mD@gydA-4[5`IlUW#G|6{re&V6n)6/o|H(a<a{lgF;D5%N');
define('NONCE_KEY',        'Wj&cj+`0h-r.sE/Bbc@][Jgby,ls% YH%&(R[}sDYOhyo^~;xY{nRsAP|@0-4YLw');
define('AUTH_SALT',        '`1-LGCWz1KM~|4fN]8i?mg]pN~wD1n|()}W$j2(wI)hbMiGz{08+-O-U*O!vW&+I');
define('SECURE_AUTH_SALT', 'AsB`-k^E;,#f|/r!-W1fU7R-iKB)YPx3+oTM5cB[VtA#{)qmdaT5&x}:D<i[E_l,');
define('LOGGED_IN_SALT',   '(?kW(!j$-C2c FPTT0*v,`z5R-st H>I544A@5=X|l{Q:bqN*{45+FY<`F(]z(,f');
define('NONCE_SALT',       '@mQkn?G7mHD)0#u}|T69MEa:+1GGfW}|PcC3i6wg`Fft.5-WDW(t=--S,$h#]?g>');

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


define('FS_METHOD', 'direct');
