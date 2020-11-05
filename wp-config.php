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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Jivaso-test\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'jivaso-test' );

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
define( 'AUTH_KEY',         'B&RkdE)kAISm~r[9+F^{.AQSv=.jHewa_1dJ&Q?E+--KYOo[Ywe RPf6TOO=y!1v' );
define( 'SECURE_AUTH_KEY',  'KouZ=i9FXN|<d;RhH NSsPaA=k$+%Tw d?>di!j!5!Zp16QuBS UC KgtmXG#+Y|' );
define( 'LOGGED_IN_KEY',    'n4.Hxkv#lcR)1HK,M#vg{h HB@(;}6FhIP0Nir2nyCtFocWbIYfi^v)8}7Re=48a' );
define( 'NONCE_KEY',        '#/55bcB9||9i~{PQ33Z<kmj?e}Eioc%1N3#HkzYXWY #t@h[xO`A*_#L)P/Zeh{!' );
define( 'AUTH_SALT',        '7Pj;4S{J2>f8VpdEkag#?4(OW9 uU.l.@G2:A;u-W3L:nh=-1RS2[d,IQ3Pll9S)' );
define( 'SECURE_AUTH_SALT', 'UqVIUNEPk9WPk>Dr-_(oyRJig+,#YeyyzMY.rvRe%YOPxj~@jX8KPKUq[AKs_44;' );
define( 'LOGGED_IN_SALT',   'Y80g_q.rgOh~bZW+~F6N/ao-A,+[.xO.y?N2jA4uIt;e&)VZh.gV8L@$ijs@|Muk' );
define( 'NONCE_SALT',       'No;W7o]j;d$P0Ws%Mwu0NxvP@?!#G0r%?f=^[>8:l_Nj+^Z=an$xCP4aqK.-y&rR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jt_';

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
