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
define( 'DB_NAME', 'watplus' );

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
define( 'AUTH_KEY',         '@U)|M6KuCmGhWHooEf&DJ|)v9I1|%%lg5YCVC#a@vvJmg5QmS0D;]Oor@b$6wU_f' );
define( 'SECURE_AUTH_KEY',  ';jab-_:IaS.pBINf5+nN%328G8d/@i4kP29ITtj!g?QBDhg/#BE7%%emgAH;.Jb]' );
define( 'LOGGED_IN_KEY',    'tYosp`O2R;{XOaQAfKM3+~xnu @XD26PRkT@Zs~yx{;0Jo4_Yo2}unqfg`jw*BbE' );
define( 'NONCE_KEY',        '8>Uo#:/I5UJtLxD}YK|0cZ=y<=bH<l=TN.i{7x{CJP+_}=t%`KjxTotL&h6:jUDE' );
define( 'AUTH_SALT',        '-|5B2?famI{BosAitn1gnPP-t Xa}ePXIKg,,Oeuoz<FcI.N `kWX>{3lrYPyw%a' );
define( 'SECURE_AUTH_SALT', '/=OSr@@OcvG?9vrnk=$9K:|-S*(1BmPKimKWJ>{7QP$WR#ibFsz_wMTe!1{ VNr4' );
define( 'LOGGED_IN_SALT',   'RuMA$N35(eHAJ4:eSk*f_r]]Jp_t<_(uvS3|h7={Jadp#MTgG2U$-P|_ZO#%T7w ' );
define( 'NONCE_SALT',       'GnX!ZM55fhHfDV9gJgPERn_57IeQ#ZO_TZ}J{K;o6n7=,s|-1<zXonZ m$vaBAC@' );

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
