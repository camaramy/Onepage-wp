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
define( 'DB_NAME', 'onepage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Nd42f%AXVF3%|I!1r%Hm~:Nw~PNa1sl!{- UJY$T:>U~sI<2jhSMDubbjPFt3 2z' );
define( 'SECURE_AUTH_KEY',  'h4F?CLLu%pH>{}lt%(b[A#J[D5,VKAl:bIS<t?vPUHawN.2s3g}eERQ4Y|IC)vn0' );
define( 'LOGGED_IN_KEY',    '*DK(Al9|!]4t;,&x eCd*Y/<g9>ygbh}GAr@zu2Fx4p2C19h%mV6TSU557fOgKb}' );
define( 'NONCE_KEY',        'gi}{!j<(#O-4 {?CM*1c&<4aXZ]MUjU2)zmsifNOR<_2/<+TQdjNsd+.aP6,3A<?' );
define( 'AUTH_SALT',        ';kw72w]w5My:y;uGPq1SNpJq1pkt8OR)$ovx`0ElQ$Ub;SmYj6F$SK>rdW`y/BH.' );
define( 'SECURE_AUTH_SALT', 'r;{s0-orkGskmN5Tp>p?{ULc]0xjN8LjI}w2kqWneXhO0QG;ud2TxB?5|x#Kb|[J' );
define( 'LOGGED_IN_SALT',   'Dg@lb.0)R&vv,_J^6pbdI?wO_o{eQS+F0^J!gXltqpPO=xHwFd3Yz-)qx?a8wn(f' );
define( 'NONCE_SALT',       'w3K=c[:!al-b?[`fT<..Xk_)BRl:o4;TW/@$REpLC#Wy(I=MCI;Sb091$Z2@UfW!' );

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
