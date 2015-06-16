<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}u#M ,qjx*;SBge&7_g=TNn+E<(:#JTqX2+(H[{{ryJfX.U6_XMgd?o;:$G8_CM1');
define('SECURE_AUTH_KEY',  '[EO{-]r^]^O&1+G4lRke4d4xak`]Sn+gp8h&B?@doB1W1&&1J+]DAKIe3Q<{Pi!#');
define('LOGGED_IN_KEY',    '%-5D;WS^--r@R%8` ~D!U5Ret];gi=hm|-/]# zUWb4HHQ?Ir5g[70rI2%|`2dq(');
define('NONCE_KEY',        '$j Ip81]e/jDM1Jxy:Jnr^;@9+^!t^=x.|$L9U`W[^FtuQX&/GM6YpF3Hoj/0)+K');
define('AUTH_SALT',        's10-Ks1F]f6EA|M)ZD+JoL#Icze$D({6/Zi*q9~ZZ@qMx`-[l&QiLh(A$8_Zbhr)');
define('SECURE_AUTH_SALT', '5G=LXz+}dUv[alMnMH9BAW$V=o}(yj0VO@&1j;mo]AY}F!.GD@q/6M^PBsV5|9Xf');
define('LOGGED_IN_SALT',   ' ~uw [R`U~-EwEbXMtd(>u^Sw$B(vgnJxTr+|8b55 }*+D+HXar{^)5u@]RO)IWc');
define('NONCE_SALT',       '4)u+es?i22D8q{Z*-?;Rp& (rn$IRVwr6i784b|8<<2+(jxCVEw}Zo`6M4Z+?x$d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * To set your WordPress address and blog address, use the following two options:
 *
 * define('WP_SITEURL', 'http://example.com/wordpress');
 * define('WP_HOME', 'http://example.com/wordpress');
 */

/**
 * Version 2.6 introduced an option that allows you to move the wp-content directory. The two required
 * options are:
 *
 * define( ‘WP_CONTENT_DIR’, $_SERVER[’DOCUMENT_ROOT’] .
 * ‘/wordpress/blog/wp-content’ );
 * define( ‘WP_CONTENT_URL’, ‘http://domain.com/wordpress/blog/wp-content’);
 * The WP_CONTENT_DIR option value is the full local path to your wp-content directory.
 */

/**
 * Optionally you can set the path to your plugins directory like so:
 *
 * define( ‘WP_PLUGIN_DIR’, $_SERVER[’DOCUMENT_ROOT’] . ‘/blog/wp-content/plugins’ );
 * define( ‘WP_PLUGIN_URL’, ‘http://example/blog/wp-content/plugins’);
 *
 * WP_PLUGIN_DIR and WP_PLUGIN_URL are options u
 */

/**
 *
 * To save your FTP information in WordPress add the following options in your wp-config file:
 *
 * define(’FTP_USER’, ‘username’);
 * define(’FTP_PASS’, ‘password’);
 * define(’FTP_HOST’, ‘ftp.example.com:21’);
 */

/**
 *
 * The WP_CACHE option is required for some caching plugins to work. Enabling this option will include
 * the file wp-content/advanced-cache.php. To enable this option use the following code:
 *
 * define(’WP_CACHE’, true);
 *
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

