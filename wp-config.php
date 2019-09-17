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
define('DB_NAME', 'wp_slutprojekt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'lDw;@CXlK`s!n l40ik/fN/!<wBR3A3zGr(7R[RiQS8NJu6(w&Oe:9 :I3Ajcv6_');
define('SECURE_AUTH_KEY',  'm1O!(m%K$ow^YEWZE|/Egngp]cFPoZ7Z4Hs<x}LVr}qK]PD7%{KE7mwI]aStL5(3');
define('LOGGED_IN_KEY',    'Y2S  :.SLXi(^hyaviLj}nGsP+c6A&ZV,XYX6x.a|4=|lDM1iM>k)A}4<O8Ncb; ');
define('NONCE_KEY',        'a!LR;;U~zF5-(+GzL d_dQG9[!@MyAl&;,Eq`Z4#$E]+XIwq8U/dIQYEx;:ZX!j-');
define('AUTH_SALT',        'UXaV%?7:c*sJy+BiNweQ9Lu?OC:Tw!D?bYc#U:nLnNU4gCLrKYZne]9.^{*]G+m@');
define('SECURE_AUTH_SALT', 'k#X3W6RrwiW.cGyDD!`l8$-)1C}Uj9v&X!r=O*,9vD<AEeBb$a+W0KB-M9#@gepW');
define('LOGGED_IN_SALT',   'GzX5;z)D:1i/*DHS.L;7&_=GXO&TF+:QE3)]Lg]}o#.r*H,H3:hX5&<huC0&?f<M');
define('NONCE_SALT',       'e_/6gzhT[W7>IHuXDmM,*-YA-8.S(jJ#CP&nK!+(mFI+,rj G>N7:ur<Beb!dfQ_');

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
