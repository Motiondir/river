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
define( 'DB_NAME', 'river' );

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
define( 'AUTH_KEY',         '-pvIrg9O6k`k+lwM>: S4C[F#-O96f3x~_XpBc_C/<jZzc/J&aZQ:^jyFz!(cq0>' );
define( 'SECURE_AUTH_KEY',  'W#yblr-I+gOta/I~Qz_P`T6o|O%<>~Ksb~I5R5j!A4}#;3J/ Nz#yRhnA}tmlfFf' );
define( 'LOGGED_IN_KEY',    'pD?GkeV,sV,sI_xCTr}kx~3}z3VIY-Ypx6_Lg$Dbg7pc)G>sPZ1&HP.JHiSxfkLd' );
define( 'NONCE_KEY',        ',VJBU@roW3.UGBm[:n{4b)n!*-fqV_wJ m0.XOX]6l8j%#:OZ/7EI$nAA=J68zwh' );
define( 'AUTH_SALT',        'zA$.e>OePQ*TLQ)U[l*VO/=FZ3O]@DWTRKw+-sR l1^4o-A)}XeH@g.SV9xY~.m=' );
define( 'SECURE_AUTH_SALT', 'n[Y065T,.?t$Kmog[gTs?;/,hk51 xyPQSJA2pQ?@tHJOh7?? #v!>>Cp|Fvl_]d' );
define( 'LOGGED_IN_SALT',   'F^,(aQB3uhDp2PC7ISPU{3;%|2]H|)m4Oof/x_b92]da@FynYBBQY2Y1D_(mOD$w' );
define( 'NONCE_SALT',       'PTDR,GRWD52dPXar/{`<WyhGQLRIO!}c.d9H#:Xkx7t4MrzCLq@/;KVQ&VZA@RED' );

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
