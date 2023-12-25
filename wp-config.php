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
define( 'DB_NAME', 'EMO' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '250121' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'oZ~8r@K.,M*_pDCHc4p*<]$15`Mz-4FG5bO*j_fn%<$.[zV2Nk_@?O!T:a{N_cg2' );
define( 'SECURE_AUTH_KEY',  'kxd%y3n9+h!  ]DTS.t*QeGGR~M9={gbNl:q^%5{,Xrw09:=U1 n}ztQ21(1.oIh' );
define( 'LOGGED_IN_KEY',    'ES/X29[.A8^5-vY,U!B;ci7pcom5c9|a:jLi#d|oqd1a(e0M:J)Y!xr)UoC<gW!$' );
define( 'NONCE_KEY',        'gR|y$w<vYulJa^MLucI5hC/5MQX8E :OG9W1]`f1W=1el)<kDQqR]W!m~(=@{k,1' );
define( 'AUTH_SALT',        'dZ3dGoVwJGx(S=cHT>3+*YPqWB }hba[%BLz<-)%]H2g4^F3sn@$3^R<K#,A|oBg' );
define( 'SECURE_AUTH_SALT', 'QG&}ig;ea2P0Vi?7.PlHiAnWGI#eR&[o#($ozJ4T.djmC3/>E?(QsJC}UUWedtF=' );
define( 'LOGGED_IN_SALT',   ' E>zG,?7vH!RxHPPa7R>Lp?=(r8nKu0cOo!p)+OPE#Ft(W=tW*0>c+kN/Jm8iBGn' );
define( 'NONCE_SALT',       '1!E23E_L<#D=@d,GrxuW&Xj#dEq}=(B0pJbCgG18VUl[O|5T$+R]D2Xoltqa. 4j' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
