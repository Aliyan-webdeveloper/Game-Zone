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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'n2/z_))|ye&-JKtAk-&E{$cpEG,?P5wEmu,!FTFU//aK!K-8bhB498ypi.}Mo{$Y' );
define( 'SECURE_AUTH_KEY',  'gq2s#8z@`Q&W]lin)c>jib%Wcs($W&Ky8N@{DFYh>F/m@YeksZ]-4ov3|t$@ub/?' );
define( 'LOGGED_IN_KEY',    'Zf/Is$U2LCNSthZ#^HgV8JeWJ0~Bb6WKiX8,JPhL^~(6T!3Q)R^!h,_:F3LwfDP|' );
define( 'NONCE_KEY',        'k<F4#rp_,V(sIMVr]<&w f4<d:1>I$(il9BHtf+@Ml5H`0dztwq-,ZaX8s.UPsg{' );
define( 'AUTH_SALT',        'J<o5A[NL&NW}Q_x]*MM P%(BlIk@9EnA6hIFD^j*TDB*<x>[%4RR@lz=vM0Ph7BO' );
define( 'SECURE_AUTH_SALT', 'g*/P0&dt2}+xHH:B|o1:FJ?s6#keL.Xy?Y0McnSuyr&QR6VnUv 190P!o[[Gy6wk' );
define( 'LOGGED_IN_SALT',   'UlyeN>JHKWR1;dGwWJ`Ix<[nqiM`::%zTO$#bR~zGhvU0(_BjCFV~7=L~x;|Ae@B' );
define( 'NONCE_SALT',       '7cdidN*1EdUw?e,GPYG MFdYHP&&<p`5_q]i?63+`C@eb%|=dzq}:a/TJbTI<Wi.' );

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
