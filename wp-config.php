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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'etheme' );

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
define( 'AUTH_KEY',         '!]*>xOLV/@YUPnxy|xk?DeY=e~Wp6q#k2Ko}U-J|E+fjE5G ?J&fVv-X!&TCuY@ ' );
define( 'SECURE_AUTH_KEY',  'm9cgD52kNi`P|@iZObO>}0</x,uxy)4XTq1BoFTgxPIvJd5p&]P:Hv4y4ClVc~X@' );
define( 'LOGGED_IN_KEY',    '6{E&g+wMw-WvNfXK9;xNy9)~Tr5;=G-v;Juw#7!>l%2APT%_IOy* Kxjt7?.vyM@' );
define( 'NONCE_KEY',        'f/a$ZuM*86]{)I-LdouHi|m1Ro3/*<_Ca-nhzj761Dg^HXGqfmtqFdU2}DPuoE?g' );
define( 'AUTH_SALT',        '#~2Aya:.u[{Nt)Pb)+/V*2=uy?38]]2riqKFEJmkAN?-TI.u4a*wzkMZQ^}>p!q#' );
define( 'SECURE_AUTH_SALT', ' ,B&X<|_)~Qx!q_--M2}Z~o1Gvbsg%dGwzW 9<Ff:hCorL&L~?2p`lp6pfjL7q=?' );
define( 'LOGGED_IN_SALT',   '*R<Pjl;ZNy!E%<8g]qBV,,WS%$5x; ){},a6@YANG]Je ]AN&}ttU,#`}32tI~;v' );
define( 'NONCE_SALT',       ']CTO~f~HbRrLx_fU,EjC{kqXr{MH?0,##1CeagF^7V6LmX:VIiU7&fs}E!id1*Ke' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
