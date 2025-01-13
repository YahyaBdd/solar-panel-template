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
define( 'DB_NAME', 'solar_panel_template_db' );

/** Database username */
define( 'DB_USER', 'solar-panel-user' );

/** Database password */
define( 'DB_PASSWORD', 'solar-panel-user' );

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
define( 'AUTH_KEY',         '.=]PHW^19WX/G#721)Z~Sx7gc$RZrY$3RFGOaCx)L;8Z^}M1a0?77%tGMlG4w9i3' );
define( 'SECURE_AUTH_KEY',  'b}m)k(rjnu{ g` ^O2|np~qYK2P&.Otw(%;^cR4[/G,k?|R{i-i,x+u%ERD.<.G3' );
define( 'LOGGED_IN_KEY',    '.o/K<~MWw9m2;t=01/UbAIMm@Hm4k.ce/W?B*Q&PV[|#LZz >yyw<#lBbIJLS5~T' );
define( 'NONCE_KEY',        '7khO;O2B;{Tlv5]01F>Pl53:Q&SW5)V7Tgcqj6xye(~uQ+Wa}<.^l8So7n$$]Z2|' );
define( 'AUTH_SALT',        'w1_%2Kq,BH,ew:&0r`|]udP+{?E&.<<GZ}hH769GH>W;lV*8_[yYR6>ItSG5lVT)' );
define( 'SECURE_AUTH_SALT', 'k5f.x/#oa2)o]{~(3W[_SlSr-|x3BO}f=]7=$:,UhF7=H1Jf}5gty](Qb-nA4Q9u' );
define( 'LOGGED_IN_SALT',   'Nj(VV`fy&ydx0J+O;6B<?ar%c>1P_E;bn|N){_ZLibOne-`psigUA0=Gd`QL<|(y' );
define( 'NONCE_SALT',       '[eR0tqnQHek<tQ;V&:G >A*vA*-h^NZB/l8AT.mmJRISs(;1Bh9meM3Eu,[)xoKU' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
