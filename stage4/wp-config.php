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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dashboard' );

/** Database username */
define( 'DB_USER', 'stutzmedien' );

/** Database password */
define( 'DB_PASSWORD', '8x?5qXzY7rfcX3@p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'k57EoDHa*~[GNz+^2;>fQGo/U$Sv[fp/UM{<!v8U&NIf.>m5FNfnQ&gYBhr?s?vV' );
define( 'SECURE_AUTH_KEY',  '{g+wla(@ka8-69)r/5;_jH%hEL_r;eZN/Z#{P]3giGrM@?K#i=}H<Wxf?Z8tlk.5' );
define( 'LOGGED_IN_KEY',    '-;c_9d&QMnbMD_k&Y;VqhlSM7!p`kzc6KtMWo1U/<ffdd4.7?4ssr:K-`_K0W[1x' );
define( 'NONCE_KEY',        '`r;e{=:fd-@e)aleL:ea? n;|eo +G&hG~,8/c7Gnq2p6XuK4Mdhj8ByPgVWE3c[' );
define( 'AUTH_SALT',        'Akj0G:o}@W4Ml9OVd0j[(]%^3d5nxR),ywr/I4Jyf_R49B~Gf/U` }/|.zrjtjE7' );
define( 'SECURE_AUTH_SALT', '7m.sg>tF.P2|SV[%2,}&5poOs{[k*__!kv5CoA}_?->n~I*-kY#F$K;g^at[bj/W' );
define( 'LOGGED_IN_SALT',   '6[`ruR%+0,KFK.`xLUr2[1+Ss/qb}c[?yV1}Y]kS%ivelMB}.:h|g>hc|=Piww9Y' );
define( 'NONCE_SALT',       'y?]W HzsMu%Z9y;I[^bi}W4f=oc[V5*: Vrf^TJM)zU_2$laB^SV=7{HDe hh,[M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4214_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
