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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '=][a}ES-afWQ;g3(PS19ZkgJPr4B@pI[c@q4MVB70p!MaswC#YwC,(-7mY%n,a_(');
define('SECURE_AUTH_KEY',  'Z-?_fT|(zD%;~+yIa[FITMOup8W<B&3)ut.9&-HENl7_iRW>AmF$5SqXS_=O-Vc4');
define('LOGGED_IN_KEY',    '_VJi )MQd{HLYGTr[f)%%F_8+~YI],=&Eq|v}0BS5h^~zmmUc343@ZA0gj(lXsHx');
define('NONCE_KEY',        '>0.g<)B7>&63mX=D@6Zz?^0_##{Egg}%D!UM:gwqz/o4uRW^vB|gptuB?y.=5-?M');
define('AUTH_SALT',        'OV>*hqvA`Nc?|g%r:%m]c+?A.IXQ%$JVI3*G4*iKNZ:Y<W.-o0tsi=K7hRC{0AdE');
define('SECURE_AUTH_SALT', 'Lma!0q@J-R=>c51is_7*y5bsj1bmtw9sI@qyi%%C=3SjijJcYI4R.mfAC_Q2FO[;');
define('LOGGED_IN_SALT',   'PHw<H$6Np/mJJ%Aj)OEf^eKP%PRrEKd^l;LA^GXDz%OU$vgGw/H%Z-pJM^`tK,Lh');
define('NONCE_SALT',       'qEW6-+S8IS5Qq5Jf7X KNg=!f@}TDMuRhUr:<b?K?m81}Iv?&U]d+q{gZs GNf:=');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
