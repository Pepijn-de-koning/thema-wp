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
define( 'DB_NAME', 'thema' );

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
define( 'AUTH_KEY',         'AeNHmGL=-o7vbOt=dJ:+++Mp%Y/rQ,6IU]6Vwkg7W4Qr6R@t0rJbI.R%[+)Q]XAS' );
define( 'SECURE_AUTH_KEY',  'p~bJ!6|Go-=Es{YI5Jq.WKgC%b8B.mu^Y71HsWb]NLu@7xsB^JlXM#|8S*UWJ;&%' );
define( 'LOGGED_IN_KEY',    'ouE0YO/<Ddq>;KWpzVv9|qs{8WV;L*VBUi:%pI{/Mt4Gs*{=W4oTP>z#[3fH?PIL' );
define( 'NONCE_KEY',        'xl{;[E1 wWcT#x{x/]a)m]}OO25^D+LH,g>P[IsjfmR(f8a{|4wRi]-ze}J7a{F8' );
define( 'AUTH_SALT',        'dPhM7sCn#Q;YpI<0UYNk)e~2iT+Z3;r@L5l6MT<F2~SiFqIiU2yRQll#2>Xc8_6}' );
define( 'SECURE_AUTH_SALT', 'wl=|Z3[ tx}}xB,pt`W<;3)!hN AT,tzb5/7hpks%Vu_I*F?m38N0l2joS1p|f@w' );
define( 'LOGGED_IN_SALT',   'C$YTop1z^nb8j)B`Ln:Hq4F1ULJg4(v`IhERU&u-S:nytG;DFWU2V%$ck[<gtQtX' );
define( 'NONCE_SALT',       '~3*|&.C|)U!Eps4;reB>_(5TGK&*mQt)eJFMuDG ),*r12+c~(9CyB,Eyt>C9qj!' );

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
