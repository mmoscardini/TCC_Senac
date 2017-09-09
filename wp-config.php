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

 //** Traduzindo woocommerce **//
 define('WPLANG', 'pt_BR');

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
define('AUTH_KEY',         '{~N-5v2xKt7$.z8sxX;,q@A4g:13%nSLWK_z>#VEzKr&{f.Kx1aUxYy2Yz:nXDs>');
define('SECURE_AUTH_KEY',  '|Z,t`_vKT=IR#gk_)eLOoNZC-&WEGQ6F`t1jAEKf:#.{eoZ>fH1*PUy>?&<k5S1D');
define('LOGGED_IN_KEY',    'eeCpo0s`lT_;nTX[]kaFF1nIxl<6^<TofJu|ZU$}xDD.|r,9*cH*?&DH-YLq6t6D');
define('NONCE_KEY',        'qFtHESHgMbLiLVL*{K*DY4RG)IJ5JYoYOYV+KhMbST[]p:FD?o$s!c3jQhu6_6$M');
define('AUTH_SALT',        'N-Q(mjuq%$ph!Dvo[@gBZQoPrnjc[.;[p,|,*%+iv2]oT?@0QNP!lMHU@&&Y}s y');
define('SECURE_AUTH_SALT', 'jL[y**MPY9dfI<<Vf*^jL4U_+1=IB+}^Uyq0O]B.wiC}{RR7ugGYL7bvxoniE.Jb');
define('LOGGED_IN_SALT',   ']u?Ip8=l!5bNvpl{-9nb!L{99C$=8AqPZ6PMf?a[lXWG^4vE>xDZSC-t_3d&{^r7');
define('NONCE_SALT',       'BkIj+&qLgg>x`yiUHBCMA]-:> :noe*`*D9&YhpUD8=?!,)96S`n%mpC1GzTZMA&');

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
