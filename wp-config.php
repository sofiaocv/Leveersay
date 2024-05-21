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
define( 'DB_NAME', 'fhiuabnf_sofia' );

/** Database username */
define( 'DB_USER', 'fhiuabnf_sofia' );

/** Database password */
define( 'DB_PASSWORD', '4qoke(W#zISq' );

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
define( 'AUTH_KEY',         'Fj)FPzIw1~wBi876GCJyh$ZKwpbl6`6E9K>=ERCy=[3ctY}A_2?<B=sWtjZ5c}6^' );
define( 'SECURE_AUTH_KEY',  'GL{.[klzPGYy6JF&rsflGj{vp#So0k9@dpm}]L.@~7Wwwjak 2[FwAp(W6~=k9@j' );
define( 'LOGGED_IN_KEY',    'H|Y}bMg@W,^nvC4,O|I1br@b8sPO}Y$mb+@bm/4bm#?w3kz4i4_p#`)@UjV=E1.q' );
define( 'NONCE_KEY',        '#P4ri<a+6TSO<%Rm2|duV?5/8U6DdyARh:5dH&z+[9;6[3]0K2sHe/u]p[(]KB^{' );
define( 'AUTH_SALT',        'a~a;%}_e~#C*5xhJ%jU1@^yk~#~,Y6-L7im*x|)2|WqcXV4-< %Ms Nnm{L1)Yd^' );
define( 'SECURE_AUTH_SALT', '<Iv.z5z,F:R>hV36))3^SZHC4ND4g8g][2g?inNf+K4-%r@W4nxQ|zns+2YJXQ(W' );
define( 'LOGGED_IN_SALT',   'n.x(6$/~jZ&zF;P)V1qC#Nys?GU3gv&Kn]R(4;S0cr0_[Lr07~^:VJHtpFlMEh7a' );
define( 'NONCE_SALT',       '6?ro&6tRC{>Fv[ 1K1Uc3mc;KJB$W71F=lQh<Ilyg{#8BS,$qjr.RYZU@W[nuV.$' );

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
