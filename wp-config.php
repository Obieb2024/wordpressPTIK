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
define( 'AUTH_KEY',         '-L_3m?|jt:PROPa(;{}LpA[G>FOM%vl)6>R(Ty^8EzX|3%I(E4QB0HGPZ(0!25M;' );
define( 'SECURE_AUTH_KEY',  'H,;Q8N?+C^>-{}@^UbbQ`7+t*>=N?HqF4~m6=/U$0{F%xik`v^~d,1AR?H~q7%U?' );
define( 'LOGGED_IN_KEY',    'Vi1@$$WX%%!m:qtWeR1 rbOg0WV](DZXn! Nk0!0fYVz]BqC/AR-gcL58#Yx(7AQ' );
define( 'NONCE_KEY',        'Apj)(MoG*7sS}EW;(>{xz%Jd5a=>L1x%}eY9evaJ{aTO|6.HCJmMvseQd|e4~Adx' );
define( 'AUTH_SALT',        'sQs3o?RLpjDryR?gYEyQNx/@eQJaGe4Z0T,P_ipdoBAA=BeYoYNZ[*UDKGI#3eVB' );
define( 'SECURE_AUTH_SALT', 'T0s|3BY;f6Mp@ocfm~8Mo1dwVvv1HLw:EhuJMb+B9{!s16nx*rf/}-YQMLnbyd{W' );
define( 'LOGGED_IN_SALT',   'fF1( pLHw1`m+>`NilgitozJms:YVf`Os~@|]B-||s7X+v{w03e}%g@k$-k9#]es' );
define( 'NONCE_SALT',       'RjIC0jw_t,!k$V[I1g3q3aL9/]qG[QX?|W/C}NLM,cmhTHu8E%hF_2s~6Pb2E8)e' );

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
