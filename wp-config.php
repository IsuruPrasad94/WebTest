<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<ADbP``)})3gt+)=mp (J3T?F:P`B<sWB1%$P2|7Ob8yzIN`*HE@6B<2mbw}Rz@w' );
define( 'SECURE_AUTH_KEY',  '9}Z;MsEt~CQ4$GPiB&ZO_[A*)OI&RQRO^XVkc;Wf}W3KZ-S2w1i;0F+6,Te~,]RH' );
define( 'LOGGED_IN_KEY',    'x(|o@0z_NUsht}o=T2?CL%Glxr/.%{ `E6U%kq]L8zmL.?m2vh?m]T+c)2`V+T%&' );
define( 'NONCE_KEY',        'f&<Nx$[cON74XXjNoZ?y39(yeJ(uQ!<!kI{(!!THL$_m1j&Z9s-YP]Jv?Q^_gxsh' );
define( 'AUTH_SALT',        'Z$4dnCV~<6SpUM_dZ`UvoU|!A[6,|p^`E)yK/tzy1bSOTpd&^P.4Z<btGuY*1 3l' );
define( 'SECURE_AUTH_SALT', '_8/m_aFN{T)<;<HF)(807 :89?ek}TBJ|<BgW+:VK?jIA[{bjt`LRHgBk9>$D)YT' );
define( 'LOGGED_IN_SALT',   'fl,]8!_0[)C`F`K9%9;.p&Z _xkWvTX#p<9tB* e2lgL%%5,tJYI:{2< v!Z]3^W' );
define( 'NONCE_SALT',       '1;Iv<a65Yk8e|iCfYsIjC^1;GyHK,:0<A^XD{W].<h~Y=#WVEazF=fkILh0?C)PI' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
