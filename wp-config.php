<?php



 // Added by WP Rocket












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
define( 'DB_NAME', 'u135727435_USveu' );

/** MySQL database username */
define( 'DB_USER', 'u135727435_HuiwK' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RjpyaiTtJt' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '#w#ynu.Gq!>d<hWqL&vRNzBENMq~,&Y,U~,ITp)-<m;K0~)(]=K%htdh&Jx=9OuR' );
define( 'SECURE_AUTH_KEY',   'y3op))3gUPH4p6=rtt=GlncC>&fuD-QZN5&),eG5g5&:^nhOTj!I%teUZNc2E+-L' );
define( 'LOGGED_IN_KEY',     'Rk-?11L@Q(c}H14U$aa)2`[vAny]wuw2=deSvIzDtO?diQO[-aJ6bfAjBy~QX4m]' );
define( 'NONCE_KEY',         'hj,Yj!JVeCmloBTtxs=7heEaeO>T}Md#enqW#sr5e5>V|8wZi)$KAG~uS-DN&_MG' );
define( 'AUTH_SALT',         'y+`):YO:iy)D8:SsCdnumi<X~xVB~$q,# =H5&P$r{Ca: kli22q&X(bI*2j!:ju' );
define( 'SECURE_AUTH_SALT',  '5C?[cB=jf_4,_D4FiJ#sFr7Xka89bKW:p2X`&E|!:}//}(0hW%X3_<qgfT}@}eT`' );
define( 'LOGGED_IN_SALT',    '-c{2Y56I`z 7os#E52<vsVx]XmqXE[=cC.1<:A3,|SfjAUPhR?K)~p{gkzDh|8dR' );
define( 'NONCE_SALT',        'R])TQFODypNz_w.1mdF)9[`*FE.ay6|7tWvPDYL]nega^(H)Cr|!:!8v0ADez>VG' );
define( 'WP_CACHE_KEY_SALT', '~1J$y]G.b^>QFRZHQ:g^VTOz$|Paj:2Du7zPr9EeENv<PNx$u3}b9:LC~[v4J6UD' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
