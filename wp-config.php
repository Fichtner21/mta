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
define( 'DB_NAME', 'mta' );

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
define( 'AUTH_KEY',         'W]o F^F>Pf(:k}etpD[dT43TApt&P9IIV?N^F7TE4HjA*,o345}$VN[Jz;4]]6Bd' );
define( 'SECURE_AUTH_KEY',  'sqk:u.m;}?S2[.;R,gTtX(6D.lIf.N01pxk^prN[EEkW}MF.=ia>EL+*n<y5!#dz' );
define( 'LOGGED_IN_KEY',    'OFQb6Lpn,<&UQLoRS@.<0LZ)w{j*hgU@4D(8QE$)k-rQb{R%qN2L.t#<V(7L+>Yq' );
define( 'NONCE_KEY',        '$BRH&HEe%xN >%?}J*P3{~1C&=m8|:(]~YU/IGzg9NiJ1.sL-JRWqpp8^=|7Vd(*' );
define( 'AUTH_SALT',        '_>;,eAOWD^,D[[A&_3<h!rj?kL%$L/*W(MshW7s+xx8amv46iFu)VUZi*b<WTYCB' );
define( 'SECURE_AUTH_SALT', 'zoDHi|,[<vw,ubVNA;84(,k|1Q!l+K?mkbR~=S=iRI6Oy^JB%bpJ^hPH32BNPwE+' );
define( 'LOGGED_IN_SALT',   'c3@15RDi,tMtPeU)T,]S[)O0<_&!?5o3?SHa0z&}hB{=g0 tb|0p<]= tL6f sxV' );
define( 'NONCE_SALT',       '}9e1=Pz3AKPv<kauRp7^WFfYyy?nJjp=vb~epFJ{j5K<B<B3OSV]~f``<8+DT4qD' );

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
