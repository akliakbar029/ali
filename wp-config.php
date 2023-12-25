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
define( 'DB_NAME', 'ali.com(2)' );

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
define( 'AUTH_KEY',         'K^$rwguZ7q~Lm]R~&/q$gu(6AMi$og{rK;e.Wia}!<n]dqDEg,D`-74^[tu,U9K@' );
define( 'SECURE_AUTH_KEY',  'zHkzH(mZ}A_{Dl>UjaD*LTzMzCyZsuUZ SE>bpDA?k{AN5W>g/YpEgiGBIoi}@e)' );
define( 'LOGGED_IN_KEY',    'Ig/tuOE2c:K<aUL|aTxwuT! .#$a)sEy{2#-e}Vs^sWKhR&RP+$YpV05SgH^%$wz' );
define( 'NONCE_KEY',        ']+DFmEw+yPtE6wN1:]G^?GuqR*fJ148S/ K6f+|C0BXT9l)yL-~w+xFUXQ,ih|i/' );
define( 'AUTH_SALT',        '5]qhuO% <e7`@QD$hjPO62G=Ra_CSgK|Kh`x}$Sv.h-w_8Y&Gd9saPorvkm~;K*D' );
define( 'SECURE_AUTH_SALT', ']Cf} <D=*j$nDY,)]<D0Z]+c,L:Y^vh]@2o>;7UP_fh2)B80/j*F+:v+4X;-q;P]' );
define( 'LOGGED_IN_SALT',   'F**psaS= :0,G!n6R(k.viJ!/2?;e*5qRE]m1]CPT^[<fUJRVMZ-[a#6Jl^R{XAK' );
define( 'NONCE_SALT',       'KMuiTj_hk>/yox%a)CJ&G6}o~$M&HmY1556g,C/3IV7jW<fK7_O}0kL?:~ZEH`E7' );

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
