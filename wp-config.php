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
define( 'DB_NAME', 'Shubham' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'pYk|dH0HAhzz*MQdNS,4vv![7Z]:{b_;N]eu7.wD3~83]L6W8<YpeHQ)BAcaz`xx' );
define( 'SECURE_AUTH_KEY',  '78 e>84;ARh6[BZkNJ)%4K-iu@rz%XO3-%z,p{w8(e?^;)LF4LnN|i$?)l+AT )=' );
define( 'LOGGED_IN_KEY',    '3| :K[tG?n,`UB0|X2WtCMh1|pX`VdOA4jl<6=Lm9&, ]2L%mf>,6$zg7h)@)Mq2' );
define( 'NONCE_KEY',        '#,-OH7|B14LpHiiA$|Bd?LaJ!}^w.`*p`pH9j7KgvK.zLxF|jEWq,I.}?X;(dLr#' );
define( 'AUTH_SALT',        '1(R(cVK8{.9#T>JCDw; 1R^Z{A*< d9sKx#RdnvWRP)r_PbdD#onSDx!dF2W&.`P' );
define( 'SECURE_AUTH_SALT', 'H#>dxGyoMMk>8{R7@J`h5OPT=kuW=K4a)e!0E2q|dixd@P8JH~(_}LuOHlD{:pvG' );
define( 'LOGGED_IN_SALT',   'zs-.%-8i$~,4*|MZ<=pyf_j<xc]p{#7=7Xx&oxc~|A-9`3nHT;3<#S4VbVA{E?(;' );
define( 'NONCE_SALT',       'FQ,ml)vI5t#RD+C<}6n5)J0[0%8.^^@Ndz5`_pnYs1CTmZ~7NuG{m@#V#MU .O4[' );

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
