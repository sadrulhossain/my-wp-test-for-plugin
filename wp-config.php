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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test_db' );

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
define( 'AUTH_KEY',         'k9BvjtWA=FC.btS%IdVLxWY2_j=7A*Vx}XlU9VhSe<z@tUq+9?Q+XxjReX(ZS3Em' );
define( 'SECURE_AUTH_KEY',  '^$piBw)B&l!)nkO0,dJM-,V*)~1UZ06IS=#D6QyEY<@k?9|BF(PPZ6Y>clmV{]H|' );
define( 'LOGGED_IN_KEY',    '&eG(lfRD^^Su&gwx1^1r|hjT<R=Ac, G);xD>rIH^(z23$$)rrwhl^Ob.DC>5Y]l' );
define( 'NONCE_KEY',        'F;@2.?TPNaJf;lsRdBn;LKJ?CJfnOVuG/k5l)2I>3_#dGun#N~|:]4ENK5dUJd}P' );
define( 'AUTH_SALT',        'V?$P$!ml;TX;i/y*AFN:I6:4~1_o1w)1GcJ/tEp-Po/v/7]][^aseAB!i5aI{^b4' );
define( 'SECURE_AUTH_SALT', 'X-y&.mAC-`C|vU~.eIE@;{]_`wZF$sR>Ub>1ONb_,Njhota4&7L-Jp?CbWTWGk-K' );
define( 'LOGGED_IN_SALT',   '/oM5Af5kxqD-k/HdvNgaO1!,x{9qU5%b4hU/1k~<:g0 .vkQC_gHl62KF%?[*Oti' );
define( 'NONCE_SALT',       'Tov3:}J:yDl:r32l:U}nMX(1Ashf(DEe^{(MF>#,Cs/>4xpBHC[UJe*,&A!]if@&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
