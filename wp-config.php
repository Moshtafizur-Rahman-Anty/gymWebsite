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
define( 'DB_NAME', 'gym_website_db' );

/** MySQL database username */
define( 'DB_USER', 'Mostafizur01' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iamravs100' );

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
define( 'AUTH_KEY',         '_v90H(BCxevAty,NxCoxbCO_VB#}6U/Be5zN-Jhn(VGMd C/R~,I `u26YhCmb&[' );
define( 'SECURE_AUTH_KEY',  'pFr`#Ls[/);|q6*f&H]dRj,!)Y0T;N,4u+%NeT8c>nOI tC6Hz=>2c}=[U5ywbNC' );
define( 'LOGGED_IN_KEY',    '>F{t^J3M%Ns)5e<0*WGV7fdl0^j:OPVpj#z5%n;T0+0b;y(;u=LrGY-QX7/b1xHv' );
define( 'NONCE_KEY',        ':emlNZmL_ U=$Nz)zj;nN`%)w64x@icWI76(YT|O,p>)s-7gL$(G]b_$`iuy3Y=t' );
define( 'AUTH_SALT',        'zXeR{R$E9k[oH7SZ5.!L~6R:&sNl;Zww_DEW4a[RYF:(^f_/tpBHV#zmaMoWX=pu' );
define( 'SECURE_AUTH_SALT', '*4i=c}6`?)!e}HC&WCs6WFebv?aeuU9L5/~>-& CAIk|]/X`N^=@LHBBqJ`j%GM/' );
define( 'LOGGED_IN_SALT',   'Dd7@e+RLE7/xeX;r&h>V:^|PVVToJ?[d6j(NEEmknKUW+vUkv{{uKCg${WR+8vS&' );
define( 'NONCE_SALT',       'nj|7Fy^D &aci] TZkw=:J`r_xPy-kH4:/O6Y5B$w$E(^un=,b^g>?ls[Co/qYsT' );

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
