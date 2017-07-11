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
define('DB_NAME', 'elder_db');

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
define('AUTH_KEY',         'tt$6VM}=Pu/&wa2sT_&CDTL4Ets>,]8+Hwl;oEWsg >q*QVk=m:Sy}?C80(ApZ1[');
define('SECURE_AUTH_KEY',  '6DOAZ(d/#+V=a8j_=_um~ek|oD*&mK^?Z^wfI])SlH5|FaP_2?1J<{TslMC8iQW<');
define('LOGGED_IN_KEY',    'MhA#PBSl>(HwpH{^bM6;xR<^t-3!a`dqcRqH#BMuy/R=5ZmR{) h%0*[K=f+# :W');
define('NONCE_KEY',        '|QsfpkQx4m//Ni7A,G3JunsnG(FGi4`*AvdmgH.tcG>o^mo =T$Q|aTYTodj~*$@');
define('AUTH_SALT',        '=wPaNc07=%)_UKyM$sA`^,WsGBYcKip6B&rlUYr2%p@bK>l32<*0js:sTDZo@Sza');
define('SECURE_AUTH_SALT', 'b>0qu_@IiVgfCOcZr3NGD,D2SO5T#Ip}CoekSCwP=pQg>jgLQzbDRZeSM>ONzG@p');
define('LOGGED_IN_SALT',   'KS|9a)EA,^>I_2,ubXhS>1[(Y`i{1hYT:)2ek&Mzvs3F[v<1<cn9mtCZG0!C{YG_');
define('NONCE_SALT',       'k)B) }dvTqM2-aY[9Bb[hK%>]gpByy0n[h`fc9=R,CgSlU%ky[X6#Pb=i~C 7o%w');

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
