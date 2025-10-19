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
define( 'DB_NAME', 'miappdb' );

/** Database username */
define( 'DB_USER', 'miusuario' );

/** Database password */
define( 'DB_PASSWORD', 'mipass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '%<g#a0`7,*2zicMbcyz6 =z{?UN,$KY!VB7L;>GyR~0LnGPA@g4)$Shr4XAqI!v4' );
define( 'SECURE_AUTH_KEY',  'E3ak> aLxIHJ; YQ704Wc{_4;5H~GUgA$L~;hIp0)XN=IV#0QLA5s:@ztYaQQQ%6' );
define( 'LOGGED_IN_KEY',    'JexW[H2Qd.`mR|xLsc+`~f9e_+@K$ckKoxg<$F41&4A6nY_y7I>m0hK`6!dr:jFC' );
define( 'NONCE_KEY',        'fvT?T3eQHM&AEK$>P96*sQlM[ Ag=;116H6]8iPK,{dyJ1q;pidw1x2}1.h 6!km' );
define( 'AUTH_SALT',        '#Z;+p)6@Jd^s4YSo3(PqPB{G#)~Qp_6alfpj/ %=>fzUe$j.B3t;Pa2VYsG[Sey ' );
define( 'SECURE_AUTH_SALT', '@Qw5)Vw@^IW<{UJ7@*nPXJ9k^[QG=~i2F;u3z8u3b~M&XP}No*09BOuEQ?W4 2dE' );
define( 'LOGGED_IN_SALT',   '7289}]g!hp-Qd9/5N>QmDPaD9el% 51x1A>276*atDs/*@p)wQ=X?b.Z.B}ERDYL' );
define( 'NONCE_SALT',       'q(/LU-eMlb.Mmd62Ki!o(d=?CpiJQ`8Kf}>@Ygb1#UZg4Z:`@$7Y?h:UM-T`4Myz' );

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
