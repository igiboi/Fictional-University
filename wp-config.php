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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         'd8]GSOx.X&Ytw?`HA/q$bJ~,4BQ?#7jQ/-UAi|+jamTu#ar(1qpo]o~j w0IFqfg' );
define( 'SECURE_AUTH_KEY',  'w]^e;g.xYXvb3r)$<gnSCKzF[upSlbF]CjB.1S;9 (*Dc*oKLm[1G<PI-7f}2OQ|' );
define( 'LOGGED_IN_KEY',    'j3LAqN5@EW44YL4`HJ7Eb/+UR7*?wT/N{a+}R21(A$N-T-Or]+*5?:)3W|%/z^Su' );
define( 'NONCE_KEY',        'HX*`#S%+/.nI{E~MA_2MR!?!}U}N:S^lsqI={g]<Dc9M1[XbprTb[?/+_n0yAeJK' );
define( 'AUTH_SALT',        '>3kp]utou+H5br9}8:#g0e=J(::kqNX8Lc^L[O=r$`A_B6$;x2B[!bt/y,)}XxX,' );
define( 'SECURE_AUTH_SALT', 'z=/6+H+v]cI:$ZN4#s(|_$3wgn8rqHV%zcnXk,(Aw]fmu,Fh$f,l~4p$u$i*mcXV' );
define( 'LOGGED_IN_SALT',   '=tElx95Xr9p9l*mQG5c z8?ax9)_.={JVhhf5kDnP9_Ht-T9.,v}|cB<z>m=B5uQ' );
define( 'NONCE_SALT',       'E3a?rmV%x#=u.FtP1!`d y+rf?>PLdM&7CMK*gK4@[5`|04bP%wYPOyDD}i*)1!j' );

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
