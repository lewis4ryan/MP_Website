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
define( 'DB_NAME', 'mp_db_2' );

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
define( 'AUTH_KEY',         '8$v1248JQ0z$g4&4P81GH//!m# u_|!2w1AJ3`EiP(}0sXI.I*2g+kzFqQ5J<cSi' );
define( 'SECURE_AUTH_KEY',  'DM:>u;}i8zcL=0Ti:zBFf`NEC$nbH3R,amo^,tRYo;s.2)8h!{S{g2}`vVTg(o7g' );
define( 'LOGGED_IN_KEY',    'CYZE|Ua!LH_Rok=}u6Nm5,$Wke6;;U:67-/qIedsl 4PvD&ha`oO}AXQ%wO*s2U1' );
define( 'NONCE_KEY',        '>8%{=#bj#6^/-Pc>TSFG|;){CM%O.:>|ph,;!uyaU%;(@M8|EPqB.6/V1k.k0h4g' );
define( 'AUTH_SALT',        '@>;P7/HXDb(n{|7|H`R4oay52`$rg6E`fy$8X:1231;|*WHH$4SE}R1>qZ7NS|Ey' );
define( 'SECURE_AUTH_SALT', 'C(Gi@s3Jw*4;Ut{_v%RCO_n>KTP><N?(C%{-+qkH#kFe>S)M74WNz Xc$zOe}#iI' );
define( 'LOGGED_IN_SALT',   'K7E%f4j@Zdp*|VWkI*fNBGyROo5A7()nh)ngHS`hQTyU>zy5Testi@=^yT=1TSxs' );
define( 'NONCE_SALT',       '`SFmoik!LkuK@~IssfxkDr$](0mrlT9=STI$1[A{ZMNJwkP57]om/)2+BDs1d&zt' );

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
