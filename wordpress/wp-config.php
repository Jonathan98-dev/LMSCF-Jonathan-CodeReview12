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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cr12_jonathan_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '  m)=Z>r52B5J#l#@#aI)1pY`*$HGiB-TBG#GMHos3%9r!SY:cvH06O.rV_Uv}&1' );
define( 'SECURE_AUTH_KEY',  '9r?U SzvJ%nlJ+52#~ROl^Em+#.&*ml@6|:NsE,9:L?%1uG(st{DhwX&E$]hNGon' );
define( 'LOGGED_IN_KEY',    'J4f@9x3jCo$ghdv`6GtC)@nXeeAb_1O(aLbcOO,=/:h]vm[`w4A16>Oor:qn-W6z' );
define( 'NONCE_KEY',        '[zZKW?+xKygGC[SS $Q`ICnRIiarYQ;$1uD&^zw~(IwPVAf&S +CYle:m$SVlLYu' );
define( 'AUTH_SALT',        '$Dok|{oGEzj!(>%yrZCl3?L2WlU<VaAf0MzN>?6;JW-) =WSEb>#,?<w_3S8isUH' );
define( 'SECURE_AUTH_SALT', '^S9{p(gFMqd~:!+9&U-W5ZDPI~osVDho%*Xqo>8v?Wdj;tcIf8{7p~kqY+}#Of,O' );
define( 'LOGGED_IN_SALT',   '^{u:OPB.$|,95aK@ (9^E.Rv{1ff1`/V:IqtMs!+#v9{*u0(5FR10|Ly>+IIBC0J' );
define( 'NONCE_SALT',       'HDvbAIG2Ey8cRL*7>(2dPahCU{/@?}[8tjL#_.,y_@kmI}{^[hQ]4vZre d0{Z*A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cr12';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
