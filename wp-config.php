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
define( 'DB_NAME', 'my_first_practics' );

/** MySQL database username */
define( 'DB_USER', 'practics' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456@@@' );

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
define( 'AUTH_KEY',         'Xg-8F%[i_)tu(66j9>f<d_|<i,BBdLo4CL](aE(hRI3 4>u1*FJ4 (UBd$!shW1%' );
define( 'SECURE_AUTH_KEY',  'TpM,o b`$pO9;$HnH=EF7YSen:XVR6p:p+bNhCv(3otdmSO)nL${_+n9`} >jO[3' );
define( 'LOGGED_IN_KEY',    '1-*CY[1$vtKk9L6Vl<LY:,! %eOCTpXT ]v!2eJYCkivl0=G @bqmq[(Ke)iKwiy' );
define( 'NONCE_KEY',        ' 2Wq]%!8c`X_jDJ546vpLe{0?QrAG8<8w$?n2reiXh?MI+VZft}Id;`2E. =un|0' );
define( 'AUTH_SALT',        'Uvt<>PKGo6$J4?P%%>=k6^ %V^dmVj;8cb5%}V&ESvLFme:S1jI5ea/Ws+5UBz/4' );
define( 'SECURE_AUTH_SALT', 'jCfps8LlbJ`H:0;^g2n&O!n:,ko/qwkgGBgEscI[lBL;7U1a!di=S!lOF~n)iBa[' );
define( 'LOGGED_IN_SALT',   ')x&hyrZnOpWv%&!GA9#.3+s!sr..we%tK)dvw?7p4J3u!7+6K3@0FEvII18Lh^#{' );
define( 'NONCE_SALT',       'tIWR?^N}_](yA#[Ud3Q+/@7U(p#[Ot#JRN[U/e6NZJG<_o:?v`9<7R5}t=M RrON' );

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
