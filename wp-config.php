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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'K4Ymg](44_dRLG9YP:I+g 903Iz![XLy84G?jVH$`&>F&w +/6nc#Ee;od,5XZKW' );
define( 'SECURE_AUTH_KEY',  'p1GH]< AB9f#ur6e0 k)nj6e<3Ro)oWK!p&YUi7B=d<5uCp,@;e9(a^|Gwd`E7Hb' );
define( 'LOGGED_IN_KEY',    'xL9#ov:C>a(98:sikznxQLY,u2NO_Y~A#dI)N*{i&_KFE~@R+eMYPKBUnL>O.Yt[' );
define( 'NONCE_KEY',        '%]d5%z+,rC84({$?EK*n#Bm~C8%:IV^<cOJWQr$-[Ti+AoT/0=pEvWmeOGZ{q6hF' );
define( 'AUTH_SALT',        'w{~5gxs2UookuWh!ZVI0%4zWX,H6z5@w=FU6@TK^Ds).E-,-E96lzFA#x7ST@#J{' );
define( 'SECURE_AUTH_SALT', 'Nglju62f*t,_AQE8M~!BHaY}GI,aw7Vpi_lU,Zc0. HF^l9b|KYUfU,{J{hz`yq`' );
define( 'LOGGED_IN_SALT',   'Xhtc1,ryCkTSK:!FfxJYk@g/=$4S7qx;Y++Y.QK(d/= riuJ-oqhi9}<6bk{W54L' );
define( 'NONCE_SALT',       'r~JwsL02k<,0F|fB&CR~i~DE,lzllPs6h?XQS)8va _LWJo+.hT;$T8@gOL{>HR+' );

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
