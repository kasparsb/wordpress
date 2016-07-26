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

include_once('env.php');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_genv['db_name']);

/** MySQL database username */
define('DB_USER', $_genv['db_user']);

/** MySQL database password */
define('DB_PASSWORD', $_genv['db_password']);

/** MySQL hostname */
define('DB_HOST', $_genv['db_host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_CONTENT_DIR', dirname(__FILE__).'/app');
define('WP_CONTENT_URL', $_genv['host'].'/app');
define('WP_HOME', $_genv['host']);
define('WP_SITEURL', $_genv['host'].'/wp');
define('UPLOADS', '../uploads');

define('AUTOMATIC_UPDATER_DISABLED', $_genv['AUTOMATIC_UPDATER_DISABLED']);
define('DISABLE_WP_CRON', $_genv['DISABLE_WP_CRON']);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')F a#)WY6H;YG>EUA|^!/~Q|@Xm/9h|BA3rs-h2^[=(woV_Lo!]wMFG-ut@]/AOK');
define('SECURE_AUTH_KEY',  'E-$jSB%~||#R +KDw]H)Oy56XO]/bE fHCO!q7gj/h!)v_#|/w@*qGTnpb8= ^`L');
define('LOGGED_IN_KEY',    '!ksqA-GK4S(:FYQ2@;LE)Au+O~ .[|k&+~B$rDrpKLexX@nvENG1EE9WDRozbfa!');
define('NONCE_KEY',        '} %KzuR8*&db+RCkh[[!q1|Q:{8q&-WatqqutHQg^F?[Lf+.~eHH#uxOId#ip(,Y');
define('AUTH_SALT',        '?.FfmU%_np|s:94sNy)hECEA[bi?KdCogd)^#N-nz0Q|0V&sW_|#duE*w_W:sL;=');
define('SECURE_AUTH_SALT', 'L@_cVn+=R!{d1g+5<tN:=bXVs[K4zd1~>]]+ n{1-Zo=2NZ!Zr,UgG>kc`Mg2,mQ');
define('LOGGED_IN_SALT',   'xfVnioXp]3qb;d%9[kr%%65.:Q*e{/pAOZzFZS?e$eV^YEa$_[O9@#hmB$Q;?ZWL');
define('NONCE_SALT',       '+e]},YK;PbH2s,t+`V*pD<-Uy|:|C!Lp /p@B@zh.*VeT=V:%^W-;nyN7Z]T^eN)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', $_genv['WP_DEBUG']);
define('SCRIPT_DEBUG', $_genv['SCRIPT_DEBUG']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
