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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'facebook-marketing_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DGHMO&toLz#;c)T:j]1@us.?JFk&*=$b+44G&d$<YbEQ20I!}nV`;kwRfTS[vK2z' );
define( 'SECURE_AUTH_KEY',  'B9%+QkbvLYVrLpCrmx*d o=0xh^W( 4y.7U;O.>W6Nwy-SVs}-Mqg@&VlPzq}CpJ' );
define( 'LOGGED_IN_KEY',    '} ir%eSx>ELtE{gQ^!d?jsH&`wK1p&5boOU-a|X |Sxg15?!6=pxj.3vA)z9linN' );
define( 'NONCE_KEY',        '@!]JaemHkT~6k(N{]FCb890/(=mYOn`%6>0,a}P/ u99oRTUh1[QxKrG*!zS^>FG' );
define( 'AUTH_SALT',        '3*F/f7Z7Rjw.=4 3(93s8:i,lbNf$9,v0^hVl:hQ*npd{RZw.TyePkanE*6NnlVx' );
define( 'SECURE_AUTH_SALT', 'S$ri{[~z~TqJr]uIO2u4yG:H:f(~`/31Ia7jwatfiWfS9=t~-IG?ql056/yn[K%*' );
define( 'LOGGED_IN_SALT',   'm4YtD5|Ll2s91MjKkr1#I2#u^0V%jVkNdK)F$=.dO1N0g,=RPX+0Y&6&!~]*5G#_' );
define( 'NONCE_SALT',       'oJR-/75.Y7pa]y=i!@18p+dyq0RkZlTBhzYU;{8,)[0ghRLs Ul07~nWa(+50N#B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
