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
define( 'DB_NAME', 'cdcms' );

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
define( 'AUTH_KEY',         'I+sFf&Ng;}2|^TI!hm} N.K^.1hQ<f)xF+w|-$QUcWw:N;xxb(aFR19bW$`R{|xI' );
define( 'SECURE_AUTH_KEY',  'hBpO.,aIM*S,X0}qDZ4ReB$;&5##KcDEz1jLP@mfKPeo~,tKrT8weas+s=?_FaDA' );
define( 'LOGGED_IN_KEY',    ':Q}xR`-~>D/?0>jWI3Pb2L6 S@e~y_veX~eR$9ef0KE0v!%]|jly6e <Nq89I@ka' );
define( 'NONCE_KEY',        '<}}b=O_;lZ@F=A#2dLM???2~9nsCz:!R]MKwJ/p16I}IQ1^o`zF#|1kpn#(f:dq>' );
define( 'AUTH_SALT',        '>_<jy31R(BB7}Zz{/5D3DuHV$}mvDsz<HpM@PlD@V_J#Y_Y:=Vb:;sDHTZ8V *I9' );
define( 'SECURE_AUTH_SALT', '7SZ:}`N*|UMzlR>M{R?fB:sn2VNKneCLqa8eI[vDas,Q+??~]jd?[cc5wN?mk9Xa' );
define( 'LOGGED_IN_SALT',   '&9AggzJ=1@*$cQ4.uGgYeSNXhA7~:`$4Zt~U*c{r,[*2{k_Sfc$,J5w1cH}tNL}1' );
define( 'NONCE_SALT',       '7^=n* `OslMz,k}Hr!-&,3UTLif60MC)>H.tK]ve9YM%vESi%Rtazz(v}b19 V!`' );

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
