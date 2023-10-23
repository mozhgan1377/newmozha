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
define( 'DB_NAME', "digikala" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '8XSHra?b6 nu{w@>+Iqf^eGb!<|sj~ApPcks;I.xy5Bv-KmXbnyMa|i44p[?K1Xw' );
define( 'SECURE_AUTH_KEY',  'ARfg+nNs?o1Tze3MsGnBA<~wbKcIpNL(nrvY`8>4UV4t:Sg] 1<CqK`#;{eRwu-7' );
define( 'LOGGED_IN_KEY',    '^J7MrQlG[d @PHnb.:z=^*dv%{ov@}=$!KYhZ=7+/l6]^k<+sdF)!<4hFlj;TZU ' );
define( 'NONCE_KEY',        '(3$1q$Uxvki=FHezczD*J55X7 `NghA6^x]SU=(5^RceeV2tN~@Hg%17!b+Z!8)#' );
define( 'AUTH_SALT',        '?rBEOxA0w)Vr%z#)RA1Pzh5f/Q:lD3ef4iLiVMtD{mOt;3f:+jPA.B%Qj><WUn3`' );
define( 'SECURE_AUTH_SALT', 'zxvJ}*F6iSzv6b^N:/+1^=:]y^nx&=9BT(Yf5s~Z]t_3fxp|f?,=-#}|Q@Bh3Y)z' );
define( 'LOGGED_IN_SALT',   '|<a|7<je5g. 7FXCr+y0EiC~U?O2Q:48;1W3M{AC]0etvdKq3+$c%lI4Ngd-0 E1' );
define( 'NONCE_SALT',       'n +-t78!r.h%K6Bl%dfQ*s`> r*n5idey$yk,`=5b(dB&#gb?yi{YJ.dc{a>aKjE' );

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



define( 'DUPLICATOR_AUTH_KEY', 'Mw@|>iPq12[@sNugsH&p$qVx_TbT$^ln!wQ/]#YCDFy,C3xkZWL19KIF?w[Ah2U:' );
define( 'WP_PLUGIN_DIR', 'C:/xampp/htdocs/digikala/wp-content/plugins' );
define( 'WPMU_PLUGIN_DIR', 'C:/xampp/htdocs/digikala/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'WP_MEMORY_LIMIT', '40M' );