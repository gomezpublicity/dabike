<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'olux_db' );

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
define( 'AUTH_KEY',         '$j~!1gEP9(ovt]%veAi~iPta)~h/B#y`<;37>)zOxwwd.C ?@n}k1II%H(033J%[' );
define( 'SECURE_AUTH_KEY',  'OH052y8k#UJECytTd9@QmXp|KcpD[$vBx6c,g;-`;okiTukXYO,DW[G0X`)T5#.A' );
define( 'LOGGED_IN_KEY',    '5MXF~8QsUI[T5W6VGK$IXgTiuCj$UK#<~!WfsM48GrC4^S&}D<9Y=x1UY:*X>0)k' );
define( 'NONCE_KEY',        '1Xb[M.]a_>G:vvG)e!Y^v1{S]=)XA[(o#++B|{y0ja]`JN5q*#,D@ILZCytx+8)v' );
define( 'AUTH_SALT',        '[o?hiiRoGZvd(/4j}9X6KMlh|KF]ReV6<X<%;-E:}g;{5Q&809Mx{gJ`|M~U*vbJ' );
define( 'SECURE_AUTH_SALT', 'XpT7FLt7x%npeU#kDm*,;@^r^T&0@_X{[]DTq,lz%-E6+.0-Yk3)Xz*:#I.,# 6D' );
define( 'LOGGED_IN_SALT',   '?iW6Yju^>|3]85:bd(4]VAn$*_LJk*^_bd;;JqB]{:& )y>[uNP[Zh@dygrLSO(z' );
define( 'NONCE_SALT',       '{qc9|}J+3Fdpyh(qH|rFtR7$S.>N.*:z=t7fw6rlJ;=(r3T1duk--t9-Ey+VeGtc' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
