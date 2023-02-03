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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'solopos' );

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
define( 'AUTH_KEY',         'lvu _0mln#nK~v0XTDg=sNDh#_*hfBU`bc^fEoD(hT+f,s{#@/2hYAApADz~uos3' );
define( 'SECURE_AUTH_KEY',  'Q;LyA$IMcQ4v~AtC<8N{{]n4!w`:mk[{w2h/6:iaG85wn]5VsxWNN;O#_%`K+&bu' );
define( 'LOGGED_IN_KEY',    '_9sb0s*9w~cOjaE1FV8Rm-c9I/uxAD2;(rI1K16n+AepW[M3M<ZVEksw;YFGx]$W' );
define( 'NONCE_KEY',        'EXZnXos]u9d!=m=O4V-7k;TLI-m=lvJ#bV~zYNz|RErNiC[AN}ZXK^y2ir%bvN; ' );
define( 'AUTH_SALT',        '4~_4pQGyl|x?mXxqK(V#2+pO|F8Zrm;XCb;P6F((VRk0$1l6zc)!SgT9&p4[KKj<' );
define( 'SECURE_AUTH_SALT', 'pLHQGQ-qy-I]E=f|J$gxxvZY vLT_i/eL]snqD,Io&DZ6rv`Dt-h8=.{s[91Z7=N' );
define( 'LOGGED_IN_SALT',   '9yr]9_8$H-}F,/Oj;pyBq5WZ ^rj$aOTCkEv4{ -dQi>Jh>sR4(t^SBex_!pR&9)' );
define( 'NONCE_SALT',       'O(o+89Q}3K0B7s. clYbw>G2`GYnIq`w3O;xYvAAN0}f#-17nV2~Hbj/CUI%CWob' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
