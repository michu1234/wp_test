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
define('DB_NAME', 'WP_Test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'FyCm-dej=,mgwr$8f^G%!(f7t=.Z//?S_T4@)jUJmMU&wG:|UH~N<e!:QlnY6^Yv');
define('SECURE_AUTH_KEY',  'Jq<4V._D8W=.;E1GCU!QnZ-TJrg?iHEF%u`{(*uS^mmgY9*1eU}T]B*<6nY1vl&Y');
define('LOGGED_IN_KEY',    'Bq&$`|9kHX^ES!*eu`5skw+B4-(lGVf0O8fyf1#;_#b?`y;T6z_*fi1tFM07~jVl');
define('NONCE_KEY',        '>%I/~@U (Nwl,ttD#%`I`V~y&i4j4E,6j|Bef|?=yorDB41aD6=k7,CmdSB7@g8-');
define('AUTH_SALT',        'qCw%&d/Qp[Adq&gpZgfspm>c{[,%i*L|a/;_-L2.5BE#@pTUjvVSqu/[t+^D}%a%');
define('SECURE_AUTH_SALT', '>WNY~ajeh<W;vD]@p/S~5&deOE@yA&%?bhyhYt*+J,aQ[&qnhBqb7fr9)! K $.!');
define('LOGGED_IN_SALT',   '-LOI?K;!Kw.c-0[U(x_2z2]3{Qe+F2`h5_1s*-N|7Y#YTv1JA}vA:{_b!PAW_tVS');
define('NONCE_SALT',       '{WURR}*+{Dk,Omv^`yzVUg yl?1Q2:DA#Xwsj:h@|L#_NMJofC=~DhM2Mv$RC& W');

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
