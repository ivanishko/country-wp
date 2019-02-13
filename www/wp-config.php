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
define( 'DB_NAME', 'vagrant' );

/** MySQL database username */
define( 'DB_USER', 'vagrant' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'neTm-/[[ly*PF$%iRGp.?QtPDYX;RBtW?K*Di&G#AhQ/5iBI$ts@@f>(NL+9A;AJ' );
define( 'SECURE_AUTH_KEY',  '/P7,h206eX+~*$%Bvw0w^N`ZX<^5EX8.kx^O2,kF[A/(9t1Y`%,-?V1*a~G,?0p/' );
define( 'LOGGED_IN_KEY',    ',k7> YF@ u4(31Xg*CV((_4Rg5;J@)3f#ip9LPq Y?`2$vRTj?5i;46<Ck^&`dg]' );
define( 'NONCE_KEY',        'MO</Gm.&(,:3^(M;=;RQdJs3,Vr{#]G}?G%hE+ER#?$U3J?K`)=LK/A:Q1!X)@(a' );
define( 'AUTH_SALT',        'zr^v.xA9DS-HVcp2!#TO255M5zId[vMD=^R^,/#W(B~bHbxS_$X0~owKC[Up,R7R' );
define( 'SECURE_AUTH_SALT', 'r2Q2c(6 roF,LYGY(LDEEt,SC|IG|nD&,aubbbB3$}V(2^$yX.l&qI(HfLg:CSLK' );
define( 'LOGGED_IN_SALT',   'rUc8CW0?T[i6)Io8gbFlZ/jV;o1F;w=tq,vhHwY@*Sj9nL]fI6/5,Nu/xV:]i-sy' );
define( 'NONCE_SALT',       '2ho& ,9x:O:s,m3_+@`c;Sbs2gkWPBL4E@M;yy:9.Ti]C]WQiyfBNk|$0|<>{Ll~' );

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
