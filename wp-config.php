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
define('DB_NAME', '24_740is');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Set the URL for the site */
define('WP_HOME', 'http://localhost/740.is');
define('WP_SITEURL', 'http://localhost/740.is');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':jN=GJDE, p&YsV.9(BF|B;V;8A$=owWf]TO7;xO$AsI8Gmqp[R:-mtJKoW<T`KC');
define('SECURE_AUTH_KEY',  'NU^xD:F-3@@K(xC:pKGmzrgm I[!Mq{/-,/0cbjq[s5&g/$z.*P-|>}`~FdAqt:q');
define('LOGGED_IN_KEY',    'AxIp/Vv Oc<1X4K0l-c O1D|9W1R#b@ ^8t=h;s1Hl}W/}T*5c*Uf(UNMlWA_kU>');
define('NONCE_KEY',        'Gx^,Gu65x?7+3nD2Q0P QF$yqGZG11MUh,|{>F+pI5i]m+JR$$CQ9{[.904RZ=8h');
define('AUTH_SALT',        'qsW{6mIh;:iyC<~v%`#@q.-#%%xHd4:k$9e%fcC:U3Vh/p9k{h%9)e7|[,iCdWlF');
define('SECURE_AUTH_SALT', 'yd#~(hr|eRigoIdXmbv3z<`spDK3-!Wos)]JVNFOQkFs5[PsLn<=DNP<*?Lqo-W*');
define('LOGGED_IN_SALT',   'i{.PC^j-gksUf&fE?/-;B kw(D;TL1Z9yQL_#l?Dd3JY`.)y-V|:<SUV<x+U~7 &');
define('NONCE_SALT',       '>VC^RR5Y!z88B+d@wE0S/(CjgJ?p?UX@OSyiiXG[Z0fs}c5H3&8>ZxJU`Y_wSVj>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_740_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
