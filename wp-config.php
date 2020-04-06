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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adtheme' );

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
define( 'AUTH_KEY',         'F|@fWXHg#cc=A`N$zZ8v1WRqyUl 682nS^Cm*FBtBqOp* MH_CUW@@Ic1.?FK,@(' );
define( 'SECURE_AUTH_KEY',  'O%QZy7J.mG.`ikkvcv5^5q_=<`y~&r.1#0P/m:k/MUH36D@.[%Fhzifijk_w^K[V' );
define( 'LOGGED_IN_KEY',    '%T2N(Bt>~!l;^<[1Qop=#d!K?-_p}|@LZdb8k_:q;wL8A/%5/N:{|/|L1urz.gwX' );
define( 'NONCE_KEY',        '!O^r1-U^%pLV4pPH4`A1=(8k}c6VBnTT}1v2pF!(}|}[=/g){$=V<)Up?j%j7TA9' );
define( 'AUTH_SALT',        'CbTy1w%@;>(+TcXV=NAG52CjG,?R*3f8^$*_4J5t|Ap%Ya&AUa4aXm#F}={b:JLn' );
define( 'SECURE_AUTH_SALT', 'zAfu(R2uOYQlEqi-f/uP=DQN=/.e4a(?elw`c3)c&<$p2X.9 %PB/zh%,xS2BE{!' );
define( 'LOGGED_IN_SALT',   'Vk?:HG56_SN^69+@B|<PABRUZ ds~Dbb#gl#y9OwM1dd!D$+0!KoIz?7<)vGIMCP' );
define( 'NONCE_SALT',       '[ir}2(RbE1u5eJRmDB 3 T[+CSC:/y1e2U0`0MlAN^`u-7#c8y({5]{D1Kcp9Mk!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
