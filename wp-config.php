<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digitalmarketing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:666/' );

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
define( 'AUTH_KEY',         'T&s>k!3AUnzZ/|9##VqHlU}lV.4YHbx8h+v)S32Cwnq4V[lSgf?[Qo9Nq?,tl%aE' );
define( 'SECURE_AUTH_KEY',  'kurp7CDCKb?p9=w2zT<w9d}n_|Oa#.Gn`wv8-?s(A@bW=kV&~A2nGTo[l0JZ.1`s' );
define( 'LOGGED_IN_KEY',    'p5iHVEj _0dyBdB{@:]Qsg)YSN@Jd2xYkl2/> 8rO?t;hZgO|*3_)GS`Yl])u+nc' );
define( 'NONCE_KEY',        'zjeS=EOp?vw,c3e=E;{Nbds@H}?A!BqLd)(OHDWA&RQ,4B: GF5WKef;t@,inJd_' );
define( 'AUTH_SALT',        'XtV]?M6;y?O_BX;Y249:=PVT7+nSp{$;8kLThsu-Z5_C%ir3Pe|$-.h}#,oO>(^P' );
define( 'SECURE_AUTH_SALT', '+81C+?wg<K&rW_EON@,NM-SA1La|`,m`*4*O*>4x56HA*~{flje]i3w2ki)CqmYf' );
define( 'LOGGED_IN_SALT',   '=QoNLW+n[@:XxE4B%Lt<A9GXm9^)@@cX;0dCM)^.iOEDt1nhW$mo>b<[|$Al^Tri' );
define( 'NONCE_SALT',       '!kWmdlq6V,i_&*SkbMHvDm8-/{KM$%;GF#TDtXsuDX+Vfw8cTyd)e-,gA/~Z2kq|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
