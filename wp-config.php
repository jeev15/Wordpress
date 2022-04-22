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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '~>8N6&3xjEe7lyJ?>^5]{j-AFSY2ZHg$k>2mlhL:RdJh)meQ5LfK~7{;LIZWiSop' );
define( 'SECURE_AUTH_KEY',  'Er=&/RM4||SuCdj|= )lw! 1Hj(pn {AIeb}7Fp>O0A+R-zoAsNG:!Yx!Goz7Va.' );
define( 'LOGGED_IN_KEY',    'CX{<}JD=yOB?eH?CM/(`|_bM!YI,?0c:W$N@pF:.vHw_cJ}z<}N-*uNcDN-vSUVb' );
define( 'NONCE_KEY',        'WvHJ&f i[YDQ@H8Cx,Ca$fw70$x6kx[`Zs8[6l[]9|P=$GWu^|W=,EBo[E2_-SCb' );
define( 'AUTH_SALT',        '%wOWriV25qPIoNl(Ps0$vI#1cu5>!Oz>[RB;PSj!p=wyP+A0^cG5~gq=`%-Y:i*e' );
define( 'SECURE_AUTH_SALT', ' $yk7mzj1V+rAa2bmtnYz*e/$/2Kw@TtU_Vc}wzQ2OBC6J7/+P93do2 Lsu5u6@,' );
define( 'LOGGED_IN_SALT',   'jP3,tBq?/4Ar}Jxhzt6B)V^_k3F:}^?EN*ZHq_9qk}xm=-  %nqWS}WB$ADvP4 C' );
define( 'NONCE_SALT',       'Ksl&:YO+2N*?gJROy878:tb|XiM::,x.7b]Too*%9^QC6MKc9k8qZvWIPJ<3RRj1' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
