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
define( 'DB_NAME', 'proyecto_diw' );

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
define( 'AUTH_KEY',         'HXK46usj]#J-_# T=~NiZ(yvTl=N8uSo?H/)aHkth>,mH#1)[Q-LzUGtRxAu?@&I' );
define( 'SECURE_AUTH_KEY',  'L5(&XzC,o^UPgdl%j0G9l%tI=Q 7f9C4y k{0KUG^lEfX.{?AwzFRMqdZ<eV&-h!' );
define( 'LOGGED_IN_KEY',    '#H+b@~cT3SOi1Q9MYIqX-DTtqAQ?w17K l6-L_;>w&46?T:k+UY<|Y gvhV(C~]a' );
define( 'NONCE_KEY',        'Nb{_&aA-ad9z{6[a~/bn9}T -_;tvmRY<b;H0i#VLx-VZ(At--.WCzB8n ,ky! F' );
define( 'AUTH_SALT',        'AGv/>=G1F&m753/r+H/q?,N[e$BYhmVL61Xzc}6$H(+sW4j-KuEb}CZs)FIULa@D' );
define( 'SECURE_AUTH_SALT', '&/D0rGgz=>ukfcIjE>N84yKch,wT!Y&RWvi%}4z[1Ij|Ku-M0U!o~-5]G0!UFUV[' );
define( 'LOGGED_IN_SALT',   'fsTC-rNr#5/VqHe.Dw#@a{kpXY45uQ}JKK2w*v1:ICQ.$1u63`Bvf{|pb+<?eOa&' );
define( 'NONCE_SALT',       'z[|Ar[Q-UocND/#87I~3Piogy3GFH,,deyN<BiX@%![[7#hh8mjwz{c$(xLJ5u5)' );


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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
