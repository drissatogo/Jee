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
define( 'DB_NAME', 'tpweb' );

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
define( 'AUTH_KEY',         'F<zYD;ZGk1ssS>$D(BATS!/@z+a3euXY$Yoio^MCcuF(J;w8gba,e/Lf9!4,Nx#n' );
define( 'SECURE_AUTH_KEY',  'fzs@~.V1o);UuW<w0]e0(Ed0lw,@5V]4SV o l]d4knhdduqOVJOlZF;k[Qb7Q0F' );
define( 'LOGGED_IN_KEY',    'koVho@m.|v8JnGNm*Z$.)q{|r{9zJ,V511d5VqQ*.ba< pSt-+rNnH<`Qw3zU4iF' );
define( 'NONCE_KEY',        '@PJXYQvr]X[|A49Pv(wZxy%6j)&<[A^5bhQ^MfPRjjJJjiM56Hq_h?@U{0A_>R~n' );
define( 'AUTH_SALT',        'm0oN5FI S|6Em&Ks OJzW$u$]w|1,8{vv9055AzW4a9w;wqws-).]OySMni11fA2' );
define( 'SECURE_AUTH_SALT', 'zjzc!M11A28lpf]!JhUG&q5|RNi~/u)k@?hw3:^X$dpSMntyBz>tZh%]j&iyf(T>' );
define( 'LOGGED_IN_SALT',   'V8zL^1iQS@XP4- %LDZmhYgaEnU3ag#~=q,0a4dQ|tr~t2yb&9N!YO8wR=>s_lM3' );
define( 'NONCE_SALT',       'WxUD3]_*_xf,24k2aV+}<;cMbZWdTny30:X3Noe7WK8Noz6w_xzQ2d!6 bNx(}CF' );

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
