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
define( 'DB_NAME', 'jordanreed' );

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
define( 'AUTH_KEY',         'HyZY7BRW#~_m^Ebm~ph>I]XD4qMQ0JXsVq1-mw[9l>K)~3Ak}_Bh;=^yW:@kJ8^E' );
define( 'SECURE_AUTH_KEY',  '*BO(gDy=`VFLHIxF|gLKg13vtw5D6c%{ns/a/$G{P>_2LrRfVHVv4E }0i~xoKem' );
define( 'LOGGED_IN_KEY',    ')L.a]+ZXGTEgNI0HLdD~&Bv._kF}PXWI.*vv9?7ya3Uz5Q~ $Vg]Wv}XKg=.].,v' );
define( 'NONCE_KEY',        'a6^Nb1gvG4ir <B3BJG?{xN~G7-aJXtE>I6r&dcbY`f`O#kNt4ZV2Q.-Yr|7<^=h' );
define( 'AUTH_SALT',        'Of[R,y?pMR9LwpluypCP. I$+(1a>nX_xHnl*u5,IF0?D0aVaG;=p6j.A6&/0~O<' );
define( 'SECURE_AUTH_SALT', 'i)mEMi}N;Xju&(PV0h>o/,2 ,m}~?j@K@Ary@{spwWfL/`RG{<GRd6LpW!(}R4P=' );
define( 'LOGGED_IN_SALT',   'U{[n(C9+U@ ZY8N7u/ga%*|l2evrHV5?,FUTsO-}WD(>MlR:@f|r5czJ&h;5$l3E' );
define( 'NONCE_SALT',       'lp*wVL^ZreXekJQqwSBdV$)}XO!HBNGUk~JCb#m34^$U6Z%ZfDj_J#1XOi5LJKd7' );

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
