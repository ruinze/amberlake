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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pryinc_amberlake');

/** MySQL database username */
define('DB_USER', 'pryinc_amberlake');

/** MySQL database password */
define('DB_PASSWORD', 'p[7f71f8rUVd');

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
define('AUTH_KEY',         'lmjlf{|6Sx`&U!p0g W39&n6->iO@v(i+?Q.3t,{s`MT7eV?f#MFO0-UM_3yzh~n');
define('SECURE_AUTH_KEY',  'HAWBh8w2FzLK]!|QYtj7Hs#J]QCo:l+P&gst+BY%Fp6m$m7h|lTBCsmF$+&,5_i+');
define('LOGGED_IN_KEY',    '3+[* -K`LoibVUtYgwt>9B+[3Qp x?2Gt(of8)`kol-( |BTD#`_|TVM|n_]&5ji');
define('NONCE_KEY',        'i-((=nd_at$$}mQUn/0(*iO;HUc|;q`Kaq5OVfk~KzU^5{rU>Y[{+`O:/+2uxeez');
define('AUTH_SALT',        '<Q,zAM`f^g_zjD*}2U!7x0L*+f Wi H06=:=T)I}|Iu/3we3>b.y 4^{_-J6eFZM');
define('SECURE_AUTH_SALT', 'yp*r=9Q1,JZ9X}eU=>>Bmr< !_5+YGkRDe1W#NyD|Ux~&-RkaiKH25=Sl^:EEfIF');
define('LOGGED_IN_SALT',   '>j|&PP-J;T6)!3N{E,>/ZrpDYlIMttpgQf6LFoRe||NH[d)yKktfMqu8XHYPx:)x');
define('NONCE_SALT',       'ZC-Vh$Gez$?h}K^(RCj9jDGTrcL|ZA^%|sM#G@rPkWGt#0jyF,?IMfv{TIXJ&y7b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
