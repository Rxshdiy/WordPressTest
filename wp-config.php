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
define( 'DB_NAME', 'wordpresstest_db' );

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
define( 'AUTH_KEY',         'M/rP6HuIj);)_!;Z1!Y=6Bv-*EM3+_AtrNkUp;(:(RQu4dTpa2(W%aJJ%H18*Mof' );
define( 'SECURE_AUTH_KEY',  'z:g{A*x+_$Ka)#Ehbv9u}Y.dfpo{D6b|O|)i&]zxdp;T=.6SQtDz^h%ik@&co,UL' );
define( 'LOGGED_IN_KEY',    ']bx0=nV6:cn5_B}[LZG@<MXve=ii?[TogWP4-&Oqp$jEXO#%7U:4=T=/Mn$3qF2+' );
define( 'NONCE_KEY',        '?,utI*SY:u*A[&N{Ib:Q[8=s--ztm(L^W$28:Lnf)>CSr2OKU2`{T#j7KE@dNj7K' );
define( 'AUTH_SALT',        'W@*xwq94XA.t=_bk)1PgtL?+;;qwjNn W79x1%x/dDIZG8df5V.+odZ7C!r]u{v5' );
define( 'SECURE_AUTH_SALT', 'B_^ww9g,0- 9Mg4 mI4tc}]oC:?K=AH)FYi[@C>%Pbz~Z9@,:D~+3Cf|TcZ%Ie3i' );
define( 'LOGGED_IN_SALT',   'JP6qbkESeGK,=DCGONU.0uhXd`8:COLBEY+CbK_Q-_uqfSWX65xwrBf #_{x;E%|' );
define( 'NONCE_SALT',       '^~$+#k>XZ/~llDE`3&bkC3jFaq2fWPPZ.x?(dEX1k(F9I;S8F{j-r$R#,)7$[ivO' );

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
