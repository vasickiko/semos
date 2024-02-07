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
define( 'DB_NAME', 'word-press-github' );

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
define( 'AUTH_KEY',         'RqSk3]E87^|rz<v *WyL S5~Ygq,a 59ol^:(FD`[Q]5^jnt+i(^Fk/OUmBuw@cO' );
define( 'SECURE_AUTH_KEY',  '*C)qs+6GZ0pDLCFko6K.hp3NfW/MJ]Ut6dj2{3P)+j#fWDqdIOzMQ6 *,Zm hC`c' );
define( 'LOGGED_IN_KEY',    '[|/ueX*tSV<gWUyDk#|+!8bJX4$0Dk-rS;2h54(~~9a;|/)26#gm~F$M:q>%`#u<' );
define( 'NONCE_KEY',        'CJ.ju!,jH0PGPK,O(uQ`]WzPRZa:Brp8&qobmA>br$J6IW*)}+`l>_g5oIGQONxJ' );
define( 'AUTH_SALT',        '_[B1_#tJ^nCsBG-6G]531}eVYWbC]fe9a sX/b3nL-1v?ZfLKbr!L@/,n1vwKH/7' );
define( 'SECURE_AUTH_SALT', '4.Bp:Y{Rr4*j/IJ=<vkCrcZw3dsZ0bz[nkF+hM!H!*}K7RL]i6>1gZ1|HKgAKm@O' );
define( 'LOGGED_IN_SALT',   'e0fw>n(Wx~d=TKCGtPBr!o$:}ha!zm?R_[$.:^yj~c`eRCL=jSV;5gXtoIugZ6+S' );
define( 'NONCE_SALT',       'r=BZfF~DXe$U3_.g^HHj{* E~/$crhpm3}blg7[/*?agGiBW|^mc<dw2z-C4*tHP' );

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

function mailtrap($phpmailer) {
	$phpmailer->isSMTP();
	$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 2525;
	$phpmailer->Username = '51a192793e6b06';
	$phpmailer->Password = '********d0dd';
  }
  
  add_action('phpmailer_init', 'mailtrap');