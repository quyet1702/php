<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u486809929_quyet1702' );

/** Database username */
define( 'DB_USER', 'u486809929_quyet1702' );

/** Database password */
define( 'DB_PASSWORD', 'Quyet0356061172' );

/** Database hostname */
define( 'DB_HOST', '153.92.15.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H52zUoNUqSRl56X>y?SF<9g0:].2jmH_mC3 F}EU|U{siuZF0e1uZ@p X@%8Kx3R' );
define( 'SECURE_AUTH_KEY',  'jeRK%-%vq7ypkDz9r.xAF~zJX{mmSwP!DzBr)flxCq)p/z+Ok^Sq>~I(!+}ymu[,' );
define( 'LOGGED_IN_KEY',    '9EA~,Qk {~o$lEwSY{Zx5d%fm?Fgv(4WS%!sy?Wahs&7+t?C+p&dC02Fssla:d2K' );
define( 'NONCE_KEY',        'pN0T=C^WqHq,xGjbFqiwhHu:+1K9 (LBDwg5;)A/V{g#VkHT oGk`XLe~J?Vm%YQ' );
define( 'AUTH_SALT',        'L~Nc /mr5]4x`a~099n(+p9LWWEJ!F4(L ~9p2-=^K~7p=8CbI%J$AJwUy5kX.Br' );
define( 'SECURE_AUTH_SALT', 'XLYVODJTV+^-ASZd*K~gnJkJae#Z~Fd9n^wyul9d!PS;0Pat1l~D|+zrjt?zZ%@-' );
define( 'LOGGED_IN_SALT',   'eb#w$o}iA$?WBR4Ql/r@-e!RnB&7A$xfRBJTGfqn2dW+7>a]~2:~tTCk&q$Df**^' );
define( 'NONCE_SALT',       'zz#7{Ve)xV{@); paL3Pd%e.u1+Zq-eq0je1jx^WXG5!.,C?knD|~x*wda,AW}vN' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
