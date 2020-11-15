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
define( 'DB_NAME', 'wp_car' );

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
define( 'AUTH_KEY',         '^lb)$/V78[F}FY41d(J$}@wy[*$bbmaUy8?w3lPSCJNRe&e).;F9%kwi|.wXuSdu' );
define( 'SECURE_AUTH_KEY',  'a`fxIj9Ud8(|8Bx~ZG*.S&H%jCGV[FC(Im]5Hk[3[A19zp&crCz.^jGMTPht][tQ' );
define( 'LOGGED_IN_KEY',    'j;FZ$F0zFk}%y6_4<b/b6Q0/_w5y^Y k-~?EuJA<*oU(m]JFowq<PWbqFLVnzB}t' );
define( 'NONCE_KEY',        'j/XJ^*3JV9pB2l%zWeCR!(CD7]G2dYo TRg@o6YBG?EunCU-:{3R7cvN12Z[^F/X' );
define( 'AUTH_SALT',        '>]w:y|yU*aJSqfh=i&^*r /?Kou=3v1Y8:2NO&`qjcUC0,u+y-Xascj0~b.J`F:P' );
define( 'SECURE_AUTH_SALT', 'rJz_baM:%a<B#Q`/LBu*n1Cii%-0WM7%(%W_a2Ls|aMtOs2X65z07,uyk!4p%]JD' );
define( 'LOGGED_IN_SALT',   'f;xx<H.7;g8p#.gW<jl2lNWK`*+i6PecP;1Q5kcv&~S@;tyE0IJq;j2&B@Y)]D s' );
define( 'NONCE_SALT',       '%Y9wUiACHyRx]R;@E:*NaQ`O?73-e9J3/:^6?Ev[B.)]dnt??j~IsP[)f~TsBD&|' );

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
