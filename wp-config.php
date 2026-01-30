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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'j-pu!Cfq+Zj^yK&x pHg(EfdG]+}6%?IAg.,]ZYl;9N&NTM&G}]fPO<HA|Whq_3L' );
define( 'SECURE_AUTH_KEY',   'bC hgdIt.*RYK]n$L?sF[NfWXo %Lz[ s&2@-|Gxek6(pAY8q@@)Td?2Tje$O2}2' );
define( 'LOGGED_IN_KEY',     'qC{u3L7RA[=+5Mr`hIjd-}<VF@MvN>_i,xg5L{[f:lXT4?HduZMO}`y-rs4Co,&3' );
define( 'NONCE_KEY',         'Q@Xwo+@i9(Pn;$s`oFrUF,&<K{f Gl=9GCszMpoHPuNqMU_Yql+7^-e7pPY7~P5L' );
define( 'AUTH_SALT',         '+Iy<&;/+UvLC,.3*E(<hJ&m-jI_,+WXW?UK*e<j?%Sfel#naUqO+l3Kz2!Ci9WZ~' );
define( 'SECURE_AUTH_SALT',  'fC_92%t;jd^~WT9v~Lb(k&1UBT3X&p-zXYa3jE|%x[uv Nx:LKxqvccM@%JL5.BE' );
define( 'LOGGED_IN_SALT',    'r36[kw/:bmB(:6Zc19M8FT5KI-~Bo(2sV}!{]nl]jXi!&*^1yuGD9Vy.>Jp-VUTd' );
define( 'NONCE_SALT',        '))f3AAh5ojb%sPbkqn7tXn*JS0T#?P+j52(s>hCl0m)$<I}7<X0HS6V(3FqoT$UZ' );
define( 'WP_CACHE_KEY_SALT', 'H2(*y9[F0r0Iyy`+4M/4,b>2&)@:@4<)GS6U+B-Sz(NZ*m(: qUUVOYEiZvl]x+l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

// Enable debug logging to `wp-content/debug.log` and display errors on local environment
if ( ! defined( 'WP_DEBUG_LOG' ) ) {
	define( 'WP_DEBUG_LOG', true );
}
if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	define( 'WP_DEBUG_DISPLAY', true );
}
@ini_set( 'display_errors', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
