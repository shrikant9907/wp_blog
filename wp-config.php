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
define( 'DB_NAME', 'wpblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`A<-^MyHul4uefGlQY,g1.Fj`g|p5t|+<ZMjj%NBGerLj]28KjHpBWJ#xLw;Fobx' );
define( 'SECURE_AUTH_KEY',  'oUW[Lpq$Q{9GA>FW}Q,2asbhs[i%  CIiiHY;HXF9q[WJ,C }rMwZa?B!hJm![D0' );
define( 'LOGGED_IN_KEY',    'vx>{BV+vB7X6M<pkkW;i&-x4{[suXJhjc4=uVS ]o8N]_<,4DBa$4!5^fl2|^wB0' );
define( 'NONCE_KEY',        ',N}@dD![X4&~wmI>UM($N?i?kKT}O-}tLJPD0N0/pvTto&!Z{:ZioE&DV}.z2BQG' );
define( 'AUTH_SALT',        'SqPW6H#4TPXXyrfW21=7<qm!p/H]CCW35I%cD~u>qh`Q1&:dJJ3PgRwh]+1&cR]l' );
define( 'SECURE_AUTH_SALT', 'P+.ECri0 j2,dR]Q|i&Eb#Rv`+x*+Dy1y<iYR`p[ZqN<:&0z$]Cb;+ y3qJ&uvN@' );
define( 'LOGGED_IN_SALT',   'tLa6R%U1.CII<<`E(8n<EtD,G<W4`&P*Ys_+ado}Y]PC}P?CF~4WPOFRfBKS|YM$' );
define( 'NONCE_SALT',       ';:dgqS3%+aRr1T2Z3/7(<g62FGrs6l2dyIK,6939^%Qt#Og^FXlZvKF=h*=Rp+LM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbg_';

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
