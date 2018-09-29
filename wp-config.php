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
define('DB_NAME', 'quandoos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'QDye9-VIPifnFl%hs|9;ttxVaF5DG^?:_VU5NXK{&lJ#t]S3X!x`Q3:>,wPfT?.3');
define('SECURE_AUTH_KEY',  '9@nhRn&s#9,JGdM<d%L&uWS8X4c3iPh-mF]zzysQtvUhev9)U>?:i*||Sk!,`2 y');
define('LOGGED_IN_KEY',    '4,$]t[:G}Z#[| )0MuZ+8o%YPaD2NrrG0 ` a)MuYJ%1*.V=/}M95G9Y-H]wDG_B');
define('NONCE_KEY',        'ntjJ@VXp+rMn%&Hr!|SVkbNo3[!67<S16c`WWo>GsBKJcYhEN ]Q,SH$Uc>o/N5+');
define('AUTH_SALT',        '3JD/X<;p?a|%-<L_3BsBO/A-JM|^=%?AWlwqH9h!cys740e54l$Tm9TLwExVUfZ}');
define('SECURE_AUTH_SALT', 'Y{I{{wW>yrgd?&Kk)J &%gVKwwW~^c^83>3?<ee4;,/&3qVj7coo~al>%,wKqHZ:');
define('LOGGED_IN_SALT',   'bj/ZBklM|CE^ZL^GPt@`w;&zJ6,UJ8fCp?8Ea^x}`YqHFFl Z}323A>Ew!fPt1=-');
define('NONCE_SALT',       '&Pb>KxZ`>y:&7uT@q4m)Oug}#J@hH/D{#H2R-6$CVl+31 D#Ph+?o=kPRT1#4BzK');

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
