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
define( 'DB_NAME', 'lighthouse_wordpress' );

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
define( 'AUTH_KEY',         'zK_faiKorN%p/O#uWmx!4&q(jN=I^^l!JNTpr9v;`kIAG4VAeDF=vXA|E5P|sqC>' );
define( 'SECURE_AUTH_KEY',  '/6`o *7mhx8NqrH+[ j^j/$#|+%zX|8ewd*wTQ[S5W6/&w=pV:p@=b#I:>k69*s;' );
define( 'LOGGED_IN_KEY',    '_<7JBxYC^Den,Pew,GVH@Ed6<t]BrH+p}U+f12$0wC@tYk[;^Y:~6>&Rq%eU$W;E' );
define( 'NONCE_KEY',        'Tjd}SY<R$gP~X#0Y224!Z(CV{mE%iaXYdrjH@g-`XE/Pu4;-W,1-DTTV-pSR%a|{' );
define( 'AUTH_SALT',        ' YQ%IjRcAB<9=To=MF7A]-u+^rY+]g8+i=vlvFc&Yxki[)_2f]mWj5[}>iMh+1jW' );
define( 'SECURE_AUTH_SALT', 'phSex;)i*Nn1:((h!%ZIA wFwlQ>&L}IMS4(F<U:axZUPCk*s^QM^P9av.rKI])R' );
define( 'LOGGED_IN_SALT',   'JG+R|<*]n! uzVXD$`,f+)g%3tA|S/G2_U<n*pZG@g3fL(F(!iHPRE@uGpK_/vRj' );
define( 'NONCE_SALT',       'X#bw8pX1Jk!Cmfp3X~}TTIhl}WnlWN,r3Aj7fE;B%n{[zE*rSjZ>bHI%m96jL^}1' );

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
