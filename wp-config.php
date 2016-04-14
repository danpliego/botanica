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
define('DB_NAME', 'botanica');

/** MySQL database username */
define('DB_USER', 'danpliego');

/** MySQL database password */
define('DB_PASSWORD', 'Nana1823');

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
define('AUTH_KEY',         'O0WUnG!u:iMsexJ^pET:lkyP<|G)H(LEIPAGR1OAnNZ{=/g]OzO9*!YD+11)Q{|q');
define('SECURE_AUTH_KEY',  '/^ym#nZrIv@<XywP)cS$&Tj3*c`-hyZmyc~K{qnCF^jHVhsWVQ9Da8eMASlFm*y=');
define('LOGGED_IN_KEY',    '<z76/Pk;UdZ<%Ji!PH5ORY1#zpXD V^dxxbR-3YG$sVw=@f7tfW%0&u0uQ,Jewy]');
define('NONCE_KEY',        'ML6#+Y*tl}x[)=T^OC7H^Jyfr)ACso&n/2VdRPQ.~q3p P?I37>Nz> +Q%74M?c&');
define('AUTH_SALT',        '~lORshe~1uKV%43kE&6X3^us:T .U93akfaZM/4P}+!wI0s=!fu@e;U jbe$Z6BL');
define('SECURE_AUTH_SALT', 'Hi37X06}HBc8s]B%8OtGurbPVN(kkn2o [F*4X&T3lp$R<|#SRY_-GxP^] ZE-HA');
define('LOGGED_IN_SALT',   '9oS-Ca{9~=9XTh%]K)x?xm;S?t%H}GaYIPXSpfD]}obZerr~1k&pj}[F0mQ0|mw?');
define('NONCE_SALT',       '4&521,qr ny4s$m46P|~I~96->~xhB]Pvz4[^+/(]Y_YL.X$Sl<9(Z&,U TyHhuZ');

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
