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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'C$OE+ryedo(xk3;~szhfa4GT$p$umRZIv(DmE7PXG2meHdLpZ,EPZ5C+fyPHq58^' );
define( 'SECURE_AUTH_KEY',  'W8kY!LoX^aJ=FJQvRQ9}mnHqIV(aV7e6G6XOLhz>DNM$>W%_Ezzv/M*bSU{[g+q(' );
define( 'LOGGED_IN_KEY',    '<y7R/.zhTGS-p-rq>jOBqW]#PQ`HtNnpxhVDmC1F.06.^Pf+EqewxmUpLt&gbGj`' );
define( 'NONCE_KEY',        'm18=6rJQ&WBy3~obB-y3]2Lgs8/[$!AQqgf/69a,X#jMhamG@Um9:-+FgGnSBt1c' );
define( 'AUTH_SALT',        'Reo7g``NwwF7Kc.pS%4.eWe#4r@%A;Mb5f7s}#`E+G>89Yfo{ix.-F:x](2D]K>+' );
define( 'SECURE_AUTH_SALT', '`9y`g/h:~9lKzUy*i{P7dB[%Prl [W/ICtS006<e|E(?{VB,p.R>-E.Ml?qbZ#Uf' );
define( 'LOGGED_IN_SALT',   '}*uh1o%1k=<{n}aSJm^cO_ZWTRa|qjZZ? ml_J:tew^_9n~z4pRM0MjW66/{G=:t' );
define( 'NONCE_SALT',       'G3qz5f,$0|j|tw)~}uak4tgCV(p7r6Q[KAT/s0.:ZSuOLw*F5%M#[=7Z_]}aK%df' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'emm_';

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
