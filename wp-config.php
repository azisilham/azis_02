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
define( 'DB_NAME', 'azisganreng' );

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
define( 'AUTH_KEY',         'ybok2:xew#j3tCOJ2nD^BWYp7NI=e_OOC].=1V!WX_4Gs)&ss,Ex0NgP2Ve!9JVl' );
define( 'SECURE_AUTH_KEY',  '^c i+hSJ)lc8x,?-<x+7;kdBMuV^782l0_4)L:$z[^68$B4%99IkZ6p*$#uJ4E>F' );
define( 'LOGGED_IN_KEY',    'H$;a5^F5`[6D]wem];Lf>iw{,+].L[xyoz,sCX/3VcT>X%{c`ly|5RkNQ(uS kY^' );
define( 'NONCE_KEY',        '?UxOxOmWC6h%pD/3n<<e:&OlfYqce$ ]VWY/!{?_h?E(n2aeKnZ58sTnYr#8uj&o' );
define( 'AUTH_SALT',        'd#t%eae5W2^}v0,a2fxxxn}SubeIjZ4#?w7PGdzR2{.IHP9*}juV+OKFBd-Pg `Q' );
define( 'SECURE_AUTH_SALT', 'mSP/MAxoy)EAs@$0NBS^8xH[W@0z@4+Nb2`^|FC$gkhyyY=Z4B>wY$+fB`R:>tB?' );
define( 'LOGGED_IN_SALT',   'gs/!.Q@##zmym.V#XcbK8^~~Uqa/C ]:&QS#?N0T q3KLaQ8^q:6ql;qT)Kd2~8V' );
define( 'NONCE_SALT',       'ZQoZK>J;c[xCPs?nT8UpvCp<5gMrE}K|W%huD&Q%KjkM?{s^>QF3xZWt(F*6>DZ:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
