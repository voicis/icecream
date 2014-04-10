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
define('DB_NAME', 'zethh_bb1');

/** MySQL database username */
define('DB_USER', 'icecream');

/** MySQL database password */
define('DB_PASSWORD', 'X3lmeromeroX');

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
define('AUTH_KEY',         'fXYzI+72u|[]&uLOu-o>!<+Ed %(z.j#ja[ G_e#>9z%e%N(gshVo&,Xia4?2JSj');
define('SECURE_AUTH_KEY',  '{/%I}m@~0y^nQt=yG}3$zE0|Tv9d&C:sB*i+^cef`kSPjd8_z3wg:8z|tToZr)Zf');
define('LOGGED_IN_KEY',    'm1!#dyN&|i%*-NdbPBvVTRXkpN-Y(;-K.rwz/+ThiE8S?A+86z9I)Wd}cWftgwi9');
define('NONCE_KEY',        'IVPpr@wjHN+XKg|xR@G/~[A4.qYyKWc)/PgufEvbWyAa2]wcbzIU)q<y1jIA-,PL');
define('AUTH_SALT',        'M5+,`JwTr^<,4wd9mFE/)z^kpE462.mx;LhMT~)+SO|I?9UAKrEZ(J}qJ_1{;+<f');
define('SECURE_AUTH_SALT', 'xXy=K8wCz0<]9cLJ3o=dQHoPH8l!`VP|)I=U2i@82Oa-<v 3F/4/|*rm |:F>G7`');
define('LOGGED_IN_SALT',   'Kl1laWpzv^[]$TQ[4SG5~E9qs6Lfjd@)Ho~K_Eg@{R`P%teD f=yvEc7/)2m-9VG');
define('NONCE_SALT',       'IlT<&k&XK9JvWSe7Q:jaM3|1X Fy-IzrNQ~1bc0Mv!+|Y:$QcQ!LM!%2FGP<B{D&');

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
