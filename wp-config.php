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
define( 'AUTH_KEY',         'HW2qpEuyjGN(SSLB:L|T>9kByi!Hg^6A$!vK.A8s~^#{x=R3:[yl#?[Mq(D<lw;i' );
define( 'SECURE_AUTH_KEY',  'Q403AbORW}}lxG[P~!EI%Cn4v#5LNN+)=2JsJsm.(#%>3A015EKKw>$F*rI(~]3F' );
define( 'LOGGED_IN_KEY',    ']}`P}qoR5h#wajfVS1XfNR%+?l_?q w5g;18pxBK.<`v|V`RM^7ANTp$(m3rHwzC' );
define( 'NONCE_KEY',        'UGR7li,t#<MExRy Vg_pJ&@Sdm}jT(gj2PKD[1IN8V_3Ci)mHjSN04-$_X(X%u(r' );
define( 'AUTH_SALT',        'BL$@y#}^5.fj`B(`];Ne%fxTWz)xXopPBbkdK?=>Dw5M&gFh]bK|q;:z~4xZ8zrx' );
define( 'SECURE_AUTH_SALT', '9:ZD;m4gFMHMc<MoO,E&[1IinPqe>.QSXTToX*w):3q.jDu]qP5L`^mol,&(ERE ' );
define( 'LOGGED_IN_SALT',   ']vO0[th}9*gN8;cgq4!ZrU[x#mbC8tRO3yi6_!h&|,ProSd2jYl3juX<B{zf1Pnx' );
define( 'NONCE_SALT',       'UF(_)0^HobtRH4YJHyvQ]KiQbIFhnQ2oA~XYcPUpWbtx5h{cJEdnBG>8eNLfJ=mo' );

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
