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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FORCE_SSL_ADMIN', true);

$_SERVER['REQUEST_URI'] = str_replace("/wp-admin/", "/blog/wp-admin/",  $_SERVER['REQUEST_URI']);

if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){

    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

define('WP_HOME','https://www.yulka.tech/');
define('WP_SITEURL','https://www.yulka.tech/');



// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', '192.168.200.101' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem access **/
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'Pbc+JbOe>7&l:U=7Ybh&|9rIJb8Dr1YD;j8BX{+<4fk#9Su?&N4-;1@?5=[Mv:[+' );
define( 'SECURE_AUTH_KEY',  'HtP&<el7R+ YHooYWv3CB[ 7nfKv<o^h;ct|*^mAe/{loEe$Aa]4#223r=Yf5>iK' );
define( 'LOGGED_IN_KEY',    '1mA`7CzUFM;v;-2|W?J=c[avF/?@4Lap%1__(DXzb[u>![n+x`?D)2_S.o}U`@{I' );
define( 'NONCE_KEY',        '@icZVFnp8}h*d==(n3QM_kf@2D`-U]*A0#R~Q1dNc00%Yb&L>d16_VvYoKc>SH?i' );
define( 'AUTH_SALT',        '}VO.FS,qKz0!!+bT.sJN_snl_g3]^+!02K{1K^nvN-rOP;]=v&ErdPuHnfB>+A5-' );
define( 'SECURE_AUTH_SALT', 'uy-)6beo?#~l_VB/EaQwe=:]c*}Gql3[(Z<ZT.Dt.!3s;kJ.bqcAv Vm>07g`k(|' );
define( 'LOGGED_IN_SALT',   '|}*L7zsmIhj0U#=U#%TFX^IAD4?jcyE^N{+Kvl)h+c=kCx$87#qvU=F^(DjEp]?`' );
define( 'NONCE_SALT',       '^j`:>_A6h{F31:6~eRV?,;S Z(H5*fg!rr~GEY6,^QjA$O5~n4YF0T32+F%x(es;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

