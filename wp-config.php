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
define('DB_NAME', 'esther');

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
define('AUTH_KEY',         'Wh1_}GXZ6Tf(oKT(W|DYWj1 B>rg,>V4BEmIZUNAQRabW&Wg~y9)i289I=e,9&)]');
define('SECURE_AUTH_KEY',  'A#8v/J>K~l)H7]YuyK0+;6Bx6VAva[TTR&H2qyQkX;+pt*D(gK]/*1KW=@Y#*n{h');
define('LOGGED_IN_KEY',    'N9vm77O~pJ=#5&tHwl|nH,fF:UM]xc-Rc^%m_&(u=.{.R9=)uW-<#2#<g(Ca2`,O');
define('NONCE_KEY',        '`7=4/(*<R1IqqtE|7]07ukTo2EztZlmyd>q]kox{U?9iK4OTgMZLOd[&?)~=[>i?');
define('AUTH_SALT',        'vP42)e)pg(bF-k%q+Q&K!i%QvI$&BLoU{Tr/oRNcRrd3EgHT AR,zk7.xoZuoCA6');
define('SECURE_AUTH_SALT', 'e5v?|Twrg!jPrD,g?,VE!! DJ~%u0]I?G)ZS}Z0dR{/v.o*+{.~SFv|U/dtSu9Gk');
define('LOGGED_IN_SALT',   'b>XJd`)y|BGqF~kb4%/tH!9.i}:4D89QQqenA]0aFg/&+}Q7v8ptk&hi`?4W1A}N');
define('NONCE_SALT',       'V?*%cJkeuI6O:u[sUkT97~`3hHmkoQ In9|0Dj!@X&OC#1eQuW(Y+VoGmCgPr=d#');

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
