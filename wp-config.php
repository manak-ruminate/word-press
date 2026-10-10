<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daffodilindia' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'K(F.(3q@.%h{VNu$&ZX]`!W$S}IwZeJ|v:: AFt!)xW%A<_Zf{.i$LYuz8Cfn=a)' );
define( 'SECURE_AUTH_KEY',  'al?^JXt-e1U)WMKk|FP^I8<|xoCPZob`t7UisvQR?BZ:l_K{c!kM<zM9Oj} rSoM' );
define( 'LOGGED_IN_KEY',    '0It&/[u}F<`n>7%$),NcVkTOpgk#7p?<;M|_#Q}i{7Lpd(O=0~HOE5Ojy<!b}Ws*' );
define( 'NONCE_KEY',        'b^3x,,bsUc[`y =R_=0oA@J6*kd!x2/wP4,C`jM[U.:T*u?xX%L.iGs9+.m_n%bU' );
define( 'AUTH_SALT',        '$fY-*rLS I<Aq02!;88!XW-j7]%BPIU{^)ka,tou,i$k8G0$@D/3dOq Z+3fFmnM' );
define( 'SECURE_AUTH_SALT', '<EnT;=#B(tZ lZNop4S1!#-X$K3-x;.?X:M)pHFqi_e##O[;,KC*@31z2L8O-Yfu' );
define( 'LOGGED_IN_SALT',   '{%nDZk6:htA z6BOloc*Fu_,^y/!7bbv1GZuxDr~LJ6^m(if|2fq1y9d}%8kPH3e' );
define( 'NONCE_SALT',       'lB}u(4lagsVf6Dn|iCH@3A{#)|??x$Y-jyw}FE23DS4=OFDK4U|M6yU2Wt`PJ/{u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

