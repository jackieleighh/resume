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
define('DB_NAME', 'hello_jackie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'n3wcastl3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y4LY,-jY%yaY.I<vg{x:=z!Q^?YU5-o!HdD]<tOQIcf?2tG!WU uO*a2S/Y@-V1M');
define('SECURE_AUTH_KEY',  'uGkp&D.9u)|SgNk2TvoX=Nu.o%>Fz]XDe^SMU[$}:4hN<>}P$AFA-O A#t:0(V?]');
define('LOGGED_IN_KEY',    '!VnExZ>)O~v-2!frLcNQrX^4w@`D!|w=L]cBlwnh=:1P5sp_(qrg_e67lQ+Ao[J5');
define('NONCE_KEY',        ']U)dD^ r:sq4n^voI=A;-Gq]pPm9U*f:t^+y!.wCNfHX/%(7N`&L)n17-u*#O-g`');
define('AUTH_SALT',        'xfuQL70Tew+uFK:WYF9nSDBTf`~ld_ub)V.Un</MZ5I{mRMHpi2:h<TD9d0fE*yN');
define('SECURE_AUTH_SALT', '0,@h}v`p4t?pC(eP~3TH{ZQjg~zIj7o/S!q*I]1e> ?(iB|@IH@rR;`|i m}k[4q');
define('LOGGED_IN_SALT',   '6N,|ma8@;CE*y><v{vv}L29{GxS>M5(0(l3G|L*xV{~(;iEC6Y,P;_P$6+JBug0*');
define('NONCE_SALT',       'O[)2q+l>#*,b):/%E}0rvy?{ oglx ybz|ftNB}^WJmVm;HWG]LrTlyi|wlO~wXe');

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
