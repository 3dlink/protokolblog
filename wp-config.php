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
define('DB_NAME', 'protokol');

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
define('AUTH_KEY',         '>y51SO373yf8tH9{Xe<T(_#gLpYL{kDrBiKz#$,BxI&(w`*3n&jJ~>;HRtSvN.Pv');
define('SECURE_AUTH_KEY',  'MCKN@Q93WU?yTh}=:%OQ$-d iz|6-WC cTaj/#CrU{I}EY}V*Fz;1t.[D.&)L1CN');
define('LOGGED_IN_KEY',    '.MWUnM_Z.M? J$6{U2+e^p6rp],M*onqV:n.mMRT?^F:+Aa&vOT~6C^w07Kn)[1?');
define('NONCE_KEY',        'f`bcbfaZ]9dn%RV/@-~r|05n&+t1x~{m=;HJ]IW%3m7f,V$$Hh=Mq@x3m{pgCn7T');
define('AUTH_SALT',        'IZ?*%g%geD-]dyX9sZ7(jswOUlyO[Vdb[ZoS=)&q{chKIRjm2}3CADlmk2U4V1 Y');
define('SECURE_AUTH_SALT', 'N&32`Sal$6Cg WOS&]>)X;KUW8&k5u/Amb3i8w7Tt%#Sj%&GUyI](a[TIMi-ay=l');
define('LOGGED_IN_SALT',   '8qto!63VDmam*EzJt-dbaAUa&giSceq(~H=.#Eo4hmxXU<wps|.$m5&xO/pNsUkY');
define('NONCE_SALT',       'Oig(SCGzxpMb($H-iOnK!oH}84x-Ju*)k=bPrs]&yP3N]kn,Ee&5b2v3uJ.9wH;c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'protokolblog_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
