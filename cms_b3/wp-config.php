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
define( 'DB_NAME', 'cmsb3' );

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
define( 'AUTH_KEY',         'K_twVNtBe<Cv)#7^ ZUDZgy{czP_YSYhQ=HU3ZL|$} *_Z+2!?EE#AN5Pq.B^Ehw' );
define( 'SECURE_AUTH_KEY',  ' %#I1H%&^R4m0d~b}A::nXTE%eL=pF$=MR=0YW0ciwvH3Y_:t*fw5VOpn:9G|f1!' );
define( 'LOGGED_IN_KEY',    '>)!7ny~uqTMi4Hh~tITb&?Ut_C,6^ZxU9H#{DH&!Y{P+wn-~A_NGID9dL&z E*,#' );
define( 'NONCE_KEY',        'EH?aDJHg.d;vJgShl+&dU2q0$|+O1tMS1EH{c+Gx;|slE]Fx@onV`PR_AX+H0?e%' );
define( 'AUTH_SALT',        'A#n+Gb)HiwjZAA`UyGE/rxoU?U>4|o*2<yB?E|Pr%:Keh[4*t7gY)/LU0/GXnG <' );
define( 'SECURE_AUTH_SALT', 'hA6-->nuGO5&V;(P&fzfx~aQ3=CHSmamrg)WEBap#CnZv [>9^Nu^Z<By;|[0cPE' );
define( 'LOGGED_IN_SALT',   'l:fG*x{5yM![UYPQ+|tPl3wkD?S1_+vj;>SB9e!lKHqz^W;SW>UTWskYLiZ$}sSe' );
define( 'NONCE_SALT',       'h92A%p~q<Lix]=s/fy0*?$0.Xf!@8XaMU!x^z^axeTs,9S`&`?YP2mZvWk*{<lQZ' );

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
