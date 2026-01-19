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
define( 'AUTH_KEY',          '#LRi[wVcKy@7):SX84dJu<1;EZD?cDE-UBS)q&8T96Q5a.;|<6]>XJq%q=CX06ID' );
define( 'SECURE_AUTH_KEY',   'rTGaJ+huJg=%V>EL&vV`AYA`bkFW<- //U1!Bz[r/}UYZZe3.uQPoNHB}V,bNk]x' );
define( 'LOGGED_IN_KEY',     'H[Sz2>[ o|nEL4Y/HmK1#Ig{?7qA%oihH}ksG/eT:NP}hPtUit>Xos *fc#F`a<^' );
define( 'NONCE_KEY',         'U<RB*_$2LO99Kpors+zwH<nW|#{C1`BVfR%,7NNaCBo9Gfo;&Jm{7M< s#^A*kXL' );
define( 'AUTH_SALT',         '?faK2jb2gT_<QdKZ.}AA]}MaJBLoxf19gbMgR&gkCJRH7$=uA#Q+ d2b.G$Ex.lF' );
define( 'SECURE_AUTH_SALT',  'Reiq!X]i#2~;c[?X2hm}ErXee};WqaTh:]+ADuMB:Mxn:6ldZ;^fn,Q@vXtoUIP3' );
define( 'LOGGED_IN_SALT',    'o|XUdQqepvw*yZIg|q5NXeH#DsruDCXVv+1jqvRm/Gsd-]t6w>QQ^1hRUJ:w-o.[' );
define( 'NONCE_SALT',        '/U{qs{XzH{6}OG<%pwsn)A$P!6F}FPWvWYW$G).Gc3JJp^!mU*{rIsFl_buEuvg,' );
define( 'WP_CACHE_KEY_SALT', '6Nwnm::>MbC&p-zB-I=/?L0ax/C]f(e:^]|E|t@y?AF}!p6OK0?S{GvwyJg4wb5!' );


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
	define( 'WP_DEBUG', false );
	define( 'WP_DEBUG_DISPLAY', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
