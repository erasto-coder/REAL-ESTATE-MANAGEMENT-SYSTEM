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
define( 'DB_NAME', 'realestatepro' );

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
define( 'AUTH_KEY',         'LV}hA`M$w<Y6`8IB-}60lIjkPfUM_*C>[=:x{:%n=wRXxzVP0 BNi|hm)M2shqQ%' );
define( 'SECURE_AUTH_KEY',  '&dD(fH1n8^qO|o{{18>k6:0!B-M#@3u*C,N26S?1e57L Eh8$LYs:MW7iJ|*(5Uk' );
define( 'LOGGED_IN_KEY',    'ij~`,Yi]*j,rzP#pQNQ|.#7 9LzT5ELs2;Ci8Kl&#$z=CvW Qa`tC11qZoWRnz`@' );
define( 'NONCE_KEY',        'Y(T.D*0)#jbaNH#W0Gw$o]tI14<-r!(QF.=iDI+F1_s]dm&1CKPewx%M>uwf^}/a' );
define( 'AUTH_SALT',        '(g&deADx_&~FW%wlLYD{KZ^;G$}2t:PHL8)vF$^V-dt`c9%^Y~Z_eN,D<jt<Z7HO' );
define( 'SECURE_AUTH_SALT', '|:3!kYymYO+zdrkl4s*YA:K.nh{Wl>R^H|{,LDG;@GX9eS~2Oi|))QfZxw=@e@i<' );
define( 'LOGGED_IN_SALT',   '|Eoe;q_tZtgZo0hl-{@x1Tl(NdD:i0lv(~2D) X!1,6qA8*K= UJgqC i1{brajJ' );
define( 'NONCE_SALT',       'C=J9wl-T-ESLu-e>Z;GHxjGwPFN+HVUG;#g8 ,nK)]::TDbS8W3Z1A#r~6EU^F@>' );

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
