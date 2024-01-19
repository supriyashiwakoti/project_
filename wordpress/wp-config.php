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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tMR6<VqFE=; &kBHInAtK_x&h?_+3cjdk_;+1]|N)e5Ga/o(@7eyG^IC,de8&n9|' );
define( 'SECURE_AUTH_KEY',  'CK^:nRiG#{HjA0M35ev%,W|UB/?-hT],Ax<6soaBDCt.DC<RELz+o?.JlJp5m:2A' );
define( 'LOGGED_IN_KEY',    'R@6i%2Wo*MZnf`$<c,Qf|^/{pDlYPZLW^i4^j8UZ;dG|,v!X=amkh]!]vt%j3d[1' );
define( 'NONCE_KEY',        '|TP*jO*l/p:)F&ZvvV{2q|mhrkS9(3n!LdTG@Tg:OQ#lzGl9GRznNv]#]/Q(~FxB' );
define( 'AUTH_SALT',        'DQcN#v8b&33.qhcL6zr/f7:LMmWyem|k,)3cappxp_80y9 JD{V%[fg0[Y6LT9lS' );
define( 'SECURE_AUTH_SALT', '& 8xM+%7QfBYqDC,N`%>SczXv QzP;%onSYeFYEUFL)elh`.[faGeGcyBlE07lNo' );
define( 'LOGGED_IN_SALT',   'rtI$8j8goh)mG]H$8)/.7M#)ORg_3+M}Xe=T@ff#b2mt5@&d[</S<g;!]o]V_9`F' );
define( 'NONCE_SALT',       'GWbq]Vs03q0*f8v(KL; CabQa}e1|D8]i:W2!+Sb8Y*g;WlXCE~;v}RW?pI6f}v%' );

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
