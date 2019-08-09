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
define( 'DB_NAME', 'idontknow_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{3(p6vK(]@}j/9SgFy10%`h{4ZwkBvZ[ ~ov#E1|H^}]EBv>&6n|6UdlA `J9[h}' );
define( 'SECURE_AUTH_KEY',  'Ui}k^{GO6xZt.*Ju-?YL(bER7eZM*N3~_&mE,=1d`$@-+G[dFXwaK,y@5bUBbVhO' );
define( 'LOGGED_IN_KEY',    '4tsxGP!L` Xl).&i<Y_tp4}pfqiKQJFFvXLH~BhL]#v+72Uktc^+L:#S^5eO3b*a' );
define( 'NONCE_KEY',        ']Wdo^k>j>D@+M_cTKG8_&_xx/ov(4q5W|>`HE<Y&;(0[kheHc!D-4LZ1pwN^F1B#' );
define( 'AUTH_SALT',        ',sH.Z#t){2HJp&GRiOym/pw]#2GYcq=5Ws}T<$zRMhyQax^n:-G.y]n1Sw(y{]!B' );
define( 'SECURE_AUTH_SALT', 'q;>u[Bp8D.8^,IbRqu>er{F^1+ZqLzMhS|G84tK)Td>HPMMtrOJvNk]zaDWil2sS' );
define( 'LOGGED_IN_SALT',   '+85a=!2d14*e8LA5hzJ>yu5;j1`>TPFkvKKF/^4zG.:!/(9M(lBZbR5ep,(C9IOA' );
define( 'NONCE_SALT',       'uoJ{h~)V#+@_z !<GW-Ae}Sf/%y[>5>+dE`rpW4zfWt{zl[BbuR~4dk4)?ZW.1X=' );

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
