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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.default.svc.cluster.local' );

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
define( 'AUTH_KEY',         'qJAUC/kaK:n}6;v7?}k:6wzMNNt,iv9wUj8.WTv[>BR^:34)tA|foXMe47UXx(5*' );
define( 'SECURE_AUTH_KEY',  '3ISx4O5A@?3<WDvCw*=rR5Z@R5$$hvuTY}74+tfPg1#g+f?t=mUC4Kt&WBh[Kreu' );
define( 'LOGGED_IN_KEY',    '~Qe:Vm/PeH3`=*oJ7of5h6vO=3*uCseu4#WP%9^-)ZwoL:+WCCNqZEEKjT!cwRLT' );
define( 'NONCE_KEY',        'vc!>*2Uk`i6eQTc!+xiG92(B$mUj7<U]R1|F8PfbMj;b-x`P4V)|n~N;1.6!D*$P' );
define( 'AUTH_SALT',        'yU,v[}TbIeDJJnU=~OP99PA4$^<rz2wvrL>8OpGn|U,q_vd1jIMCd,t2%~Yy(z~T' );
define( 'SECURE_AUTH_SALT', 'Q,=I$&q&_~a9qRG.;%?wL|`(Sd:Ks@mxb.tG(Ap=0(/=.PK8D0L3ya,Yq XS@YJ^' );
define( 'LOGGED_IN_SALT',   'eC|+GUyq.|- Oe8,4oT7!^HQ_e?}I=Z8)r^HCFx,?|7#WC&{-f-dnh H,lQ:4<1}' );
define( 'NONCE_SALT',       '`;g2(AHea.%d,66!tug9HB3vKc}?z%aL/oA3e^:GX*9 p;dSRq7WkxL3i%#a+16|' );

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

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')		$_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
