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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '7nNBGsxntoXAuEEa' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'o^DUo(:8N+;Fpt{7@pWSV|gl+K:/E5X|(>l[g)K$||2&xl_ESxhJ0J/U+:v@p4.:');
define('SECURE_AUTH_KEY',  '>MU_O^Mo_N-)qWjNOxPcA^ml0]m>/6]|>R<V(D3k10zHEkdHhTehmF,T8:))%nP^');
define('LOGGED_IN_KEY',    '^qkP@b4+pnNhPyhG/G$y=m2/+ [@9{Sd(j1Vv.t(+JQh2H@40kjt.7ovP`>C@aeJ');
define('NONCE_KEY',        'z!,6h-.R+!06Se ix##hBNk=J P*KwA]z+s+8UmM6T{F4n8y#q_i-d2tSVsT&f:W');
define('AUTH_SALT',        '-;SH4-l%.UlmU{S -BKDkXrpu+8Fe?hS(obl;_?dv^htsp+47^~4%h8a|#_+n,k1');
define('SECURE_AUTH_SALT', 'C7y>%o6|CSfov`tUG}|;dia,Qz?5M-1G>b+5G>f3wbi{h)+HHe3|I8z.f]BuK_~]');
define('LOGGED_IN_SALT',   '8bcSU[P2qw[19MxU@PCIc-5^9(d+--u.dnm.CDD`I$++ 6r}cj!y,6_?=hO;&5+X');
define('NONCE_SALT',       '(Y{OhPdv0lb}gvlCc9D[9cg%>|],_4Hi-em6SIF*a&=tEQ#JB A:x1y%s<Xf+Kp#');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define('WPLANG', 'pt_BR');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
