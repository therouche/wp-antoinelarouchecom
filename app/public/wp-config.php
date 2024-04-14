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
define( 'AUTH_KEY',          '%z}&ETUcwkxf+|}f2mIf:w_(oPx6=}.r6GZ,$.F [[_@so#7s~MR$(=|M/nH3!bL' );
define( 'SECURE_AUTH_KEY',   '^!6VhyO,@d,VSM=lbX#&IYijq`P0e7|J2_M_d)QVADy/8`pHJi-/Cy@@31e},N9J' );
define( 'LOGGED_IN_KEY',     '.Uis-lD/h)3Nk.#,YsNNt_xV~TI1MLHr`?b;>wp#EcRn&J$<Ch@VD/Abak*sy$>}' );
define( 'NONCE_KEY',         'pb_0d D8Td[e_/>g%|)DJ/pRgzZ+qN-O-#QTfgrJs`utPI&hm=@{4>V$I.p{|gv)' );
define( 'AUTH_SALT',         '{r~))4EG-J  /QW6oKfDs5y!r}::au0b!e(cS;c9]V+Vg!~7!qO`!S!19#Lmy) (' );
define( 'SECURE_AUTH_SALT',  'ihl]R};*FG1Q78&ah5vV]gUg=uTjAJz75{3^TK,:8:RlTy@X^8PS}KjIuCX&C[Ev' );
define( 'LOGGED_IN_SALT',    '0,I6*bXlv]fq]pU8mYXBW#z;iD7][0*+HZ[`!QEr6Qa(1&/erU5{,I_mN(#E8O&l' );
define( 'NONCE_SALT',        'ai?jI)#|KV$mpTy*e$$B@a*uGXq}u~!eD_zboS=D448x|DL*-nK5B77eCH/Ob|-`' );
define( 'WP_CACHE_KEY_SALT', '#o=)|u9TUQu]vmjG cy5ISJ?C_,UP8QL2,n{4DK4FjmqHM#5Y2Ejy1*#%+_s_OhZ' );


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
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
