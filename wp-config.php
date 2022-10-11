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
define( 'AUTH_KEY',         'w66_,K2mJkrZO4_1xO)8{7[tv]_;6 tTAdf(qamX=h@h3|M~ht)V#q/,5Oxi6Dx)' );
define( 'SECURE_AUTH_KEY',  'W>2?!uGgEf;l6r[FY07uyJI3mq2(:inaH|<_P#nA!XQz!9Dq|UZI|Bh{|(Egp<Ur' );
define( 'LOGGED_IN_KEY',    'x+L1a<}TRWud*$Oh9HhV5;BJ*11n1(3X9  3O~/6zdh/pK|yZT>#7Mb=)9,thip*' );
define( 'NONCE_KEY',        ';(/jnt^2Ob$jP`BTx2EfRs)vSX&5{z-NZ=zR:!tCb[3sj>t+`dgl<ww$~&_N~rB*' );
define( 'AUTH_SALT',        'CUQo_f?Q*qJZq@Xb$6p$O.i7nJbin]v{5,eYRHmV-YiV38;/AgL=3}-$qqiaB-Vo' );
define( 'SECURE_AUTH_SALT', 'kVz3KmB)#.56>Gtf~2MWVg;<8Q/] U_w^}y;1=+co[nUK^RZ#2_/2>{fJ{B+J,cw' );
define( 'LOGGED_IN_SALT',   'SPBp|X%gcR>b7&S``rD.S=}AilS[BHA4~pN{&aJ#j84wi4ivYSG_4{_J::@mIoo#' );
define( 'NONCE_SALT',       'UV,*C +M=h|6aa}^Vdns <q6R~65Gs|O6Zwo5A~|Z^asj;r^S#5x(k+!;@Mi^u^x' );

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
