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
define( 'DB_NAME', '12345' );

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
define( 'AUTH_KEY',         'iotRB/aT<lI&~aTL]^b(iPnkU8h{7.U@FKw{.F=)T`E+rab~u9,-sh;[@a`#Cudz' );
define( 'SECURE_AUTH_KEY',  '`Uth`C.~ o:A3?Wclv<0|+2-;P!4@>xV]E_@hz39wQu>i IKM+4Y|yC?! +@mQ=u' );
define( 'LOGGED_IN_KEY',    '_XoLy 02gZ2oV#~HTJ>fS#6c`@p~uOdP`D:Dn[2[gNGN^>``i)@Vfb9e*s>JD?|i' );
define( 'NONCE_KEY',        '4<Isx/B.V *o#}8h[_sF{`A7$=Bz&j9hhdPU?/|{g|v+([D{<`6&4WpXB{HjfKn+' );
define( 'AUTH_SALT',        'beFQta=RE<xRtv5Rm/,/E<Bh8Kqg^0t:8~K/prSD0-(n*sk`AIoc Y9Bs4eZ-eO2' );
define( 'SECURE_AUTH_SALT', 'SO7x5|ZE{xc,A~r3omfPa]HQ1(9rE*px%@iD[;L%58Y}[304tH|^&TD-VFoH{o%q' );
define( 'LOGGED_IN_SALT',   'fU6KGUd%yn!h`~w|[7eylTf2iQV-s:2o<f!Vy k&,3:VJ0.Di(/R,)OHV@E;+L6z' );
define( 'NONCE_SALT',       ',?5Rc-vR]Z/tb}F_|E%>Q,:-8[=?]]9(BukIXU53_(%keDGt$em[V;$Ie!E{Hosr' );

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

@ini_set( 'upload_max_filesize' , '1280M' );
@ini_set( 'post_max_size', '1280M');
@ini_set( 'memory_limit', '2560M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
