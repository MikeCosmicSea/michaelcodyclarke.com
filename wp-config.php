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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N8ure3!!' );

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
define( 'AUTH_KEY',         'QgbYO c?}.thnnslGQvgMDe*1nOmFbpa<~7=?<bDQ-jHog^G(gx l[H:Ym<+>l ^' );
define( 'SECURE_AUTH_KEY',  'Ryy|,@oF@|kJEE#nmm:T%q%&D~<IQmf1YLBDKVz%Vu+uhb#D3?XD e7f(=<}Pot:' );
define( 'LOGGED_IN_KEY',    '$irxBA9ejF=adUe;#w^|~1Cd$Y6HeY3VHk++3o}R<U_7.X>NEXwBV3Z@|@pDC*zV' );
define( 'NONCE_KEY',        'ZY#.]mfe7]L4J?DVej*5ADXct*.TU`TR|Q!_W%@4ifv<pSK3V+5KYqOU@h$?*pgz' );
define( 'AUTH_SALT',        '/4:{nu?<2uvg@?K8Z/-:k)D+I2VTjH|c*;6 aI6rJyRfquIp/XN#v~zM4mvrZpe1' );
define( 'SECURE_AUTH_SALT', 'fq@->{;Ej71,Z0}/qg1OOqq5o,v9U}[1#sfF&GQi4J-gkpT9V{bX8wK+suRj34cP' );
define( 'LOGGED_IN_SALT',   'N!o<.V`1k7%XtXmqPNoB.W@Vx3^CC,f[m5=Gqo`nA!R/4^AlQU38>[+Jh*?^fF]I' );
define( 'NONCE_SALT',       'Ry4Rj^YFEag>cUjoAbIHz]*_ 9fd},);q17pv71?1zMMha?{%#0DS;!i?XUkZ{D7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

/* Forces WP Home to RPi2 Local IP

define( 'WP_HOME', 'http://192.168.1.110' );
define( 'WP_SITEURL', 'http://michaelcodyclarke.com' );
*/

/**
 * get home url from absolute path
 * @return string url to main site



function get_dynamic_home_url(){
    $base_dir  = ABSPATH; // Absolute path
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir);
    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port      = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain    = $_SERVER['SERVER_NAME'];
    $home_url  = "${protocol}://${domain}${disp_port}${base_url}";

    return $home_url;
}
$url = get_dynamic_home_url();
define('WP_SITEURL', $url);
define('WP_HOME', $url);



/*
Standard routing for internal/external DNS
*/

define(  'WP_HOME', 'http://107.179.246.121'  );
define(  'WP_SITEURL', 'http://107.179.246.121'  );

