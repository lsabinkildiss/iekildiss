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
define( 'DB_NAME', 'iekildiss' );

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
define( 'AUTH_KEY',         'sB|mkBsP?X@pE<%@/_$DC+RFukQF[c@B`e:d_Gqy-maTpGnF$u/zU1.JM{JL0lC|' );
define( 'SECURE_AUTH_KEY',  'XI0OsS_p@ fP,,MkCobu~7FD[Y|@oj{u)n*%?7S-v6SzPsoAle-!3#vmqu5ykR1D' );
define( 'LOGGED_IN_KEY',    'Yy1$GHzhtdi;z*|:L&-%|8SN;^?lQN#lPZ4`lFvQt=^dm|*;D iPws3A9BCmGZwF' );
define( 'NONCE_KEY',        '188Bo9o3l3YkfPxaO;}TuW.5RW?O,za`XLh)7H-i|qdwo6$]!da&;N5f/x{fVf5|' );
define( 'AUTH_SALT',        '-#{m)$TJ.DXga;r$V@8<C`Y5Uer5c9vh,kk7OyKfQF[WNn7+3uN1r.lFN4;NG/# ' );
define( 'SECURE_AUTH_SALT', 'Kln^8(Rv>x`d(.Bx%&$v5A[J`vaBxJ.T7${v2H+1Vy]yY;Jy-/AC6VHpgdaFOkNo' );
define( 'LOGGED_IN_SALT',   ';6`(`}0mH<]*qT_&GP|Op]xr{67*-`6y?l$Y$ha3=O.x7Ml:5N1ttKn |`Ja7G<j' );
define( 'NONCE_SALT',       'HvjtkAqUm.OrJ=6kfBos]!]4^QME8`G2$~W+PQs##AypFy:q`WZR4T~govcvlSNY' );

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
