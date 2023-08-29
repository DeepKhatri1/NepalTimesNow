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
define( 'DB_NAME', 'newsweb' );

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
define( 'AUTH_KEY',         'pI<PLSFPVE#>!*Abo]=d}:xO(;wx64T]nW(+e?jPgMkRZpR5Y`|kFF8zWzqo-,u|' );
define( 'SECURE_AUTH_KEY',  'XgS_Y#.xeFtppV/nK4P^ jEhFtbs8-Hp/i:v@GJ8:(U@?l{H6E_Ce {_0vfRMj0s' );
define( 'LOGGED_IN_KEY',    '9IR_-$W}6H:QFZi=65>0Tf,P9^H%nK5B. y+^<_.{J[Jb_o;~83%fl&f4c-]PL^&' );
define( 'NONCE_KEY',        '~&xd) }|E8sG:WgD#HujHWw0NZThe] >CfCbtD#C)xxm+x:R>&&4x4H/N+]MQD<5' );
define( 'AUTH_SALT',        '}e$e^ -&zO38/}1,G]zyzg]<rNgJUV8iqHhZwcD!![86ddw7[W5hu+/g=Qt)GR+;' );
define( 'SECURE_AUTH_SALT', '*2,!%^;x[lZGjM}I461U~_u$uz/!lC.(z7I4XabnY+:J%?Jm!jS3Xo2mf7[70U2E' );
define( 'LOGGED_IN_SALT',   'S`Y7&XTyV:%X $$pSF|W&~5OM[qGz;$p/P]|c1L4Gp]yU>OeEE`7ic.h{rmt<Q+f' );
define( 'NONCE_SALT',       '!Yua:%l+h({.,Br2CLQ;68qM#YX]!!oIlvXs.5Uuqim_RjDtMh4#j{SGY)`P QYy' );

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
