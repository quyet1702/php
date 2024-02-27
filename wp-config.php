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
define( 'AUTH_KEY',         'IFyV%ac72>.TQ0h;@`_<N3|PgY[Ot*hxm.U@F>-0ND~zg*,cCf@|#r[_%5bBqn1B' );
define( 'SECURE_AUTH_KEY',  'N_l_l3Qk +29rX/YvY*q^+1XZ]p)eC 2RA+:5AQQV@K  MCTkUnrdhH|+37`brz ' );
define( 'LOGGED_IN_KEY',    '<]KvI2F3UvU!2Vx~=$/XWFoZO[0[LU5x2EP#A+6McYoYJ>iVo q9#`R}1G$sLX!h' );
define( 'NONCE_KEY',        ':i?$c{j)}M8U_BK`x9yMs87TV7ona`-00X0|d?mrZV pNhETeLj }R?wpw6e9~+Q' );
define( 'AUTH_SALT',        '),pH?Gba/&fe~)o2QE-*0jHrF&<}d&4rgPbvYwP9=/M{VEJ6I3Ir@65x&hQAr*<I' );
define( 'SECURE_AUTH_SALT', 'fyS/r0H_2g9-O:7H0dKKE:9:7W8WOwN{,rje&*;|#cNZt75HW%d?6SMu^[*~).WS' );
define( 'LOGGED_IN_SALT',   'f!=f-ZfU)Tb4JCNE,+n^)f4#7AQ-H7V[oPHDs_Q&Vv6vF~]e!][DsiTvOA`E*dn^' );
define( 'NONCE_SALT',       'PE/qtU0vvbrN4)#U#L_yhNAk{M0JO>(KySEN/e/a?&u@mK}our{c}Rvt6$ Hk/e+' );

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
