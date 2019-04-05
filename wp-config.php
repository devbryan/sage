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
define( 'DB_NAME', 'sage' );

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
define( 'AUTH_KEY',         '1wrHO@p/(F{6 +hEi*GoYZk!gyf>e=i@1=O:F#IMb7JT:&hv/6-[{TeI]mV]>k(y' );
define( 'SECURE_AUTH_KEY',  '_1_VH~ed<B|sB>~Ga>4PcJsO3^ZNfA$,Yb(@weR2a4/|o :QPnnFf9mh}$,SPo}C' );
define( 'LOGGED_IN_KEY',    'L1#uqnFM^MSrA/s@7~2CN1:V+,/!TB;=A~H])1yy(Fve-wu-j.+@[%{f|,BKi*g@' );
define( 'NONCE_KEY',        'D`Cge[]J5D=E34bsG;(%@q1@?a-oe/Z/7TZ[YZW,Vt07{1`$xucj@oR+5`)NQpYQ' );
define( 'AUTH_SALT',        'W7b{_`sH0w%Q)EhRA!hv6[,CDmi@pxGE F({faq=Yo<e[rOo]o;zelEs`H(hR-wt' );
define( 'SECURE_AUTH_SALT', 'Z~0Zy=ys`-LdY_9%=cK>co.Yb[WGU-8UxO/P5UXT%Kb`vBEMWyvMu18{=#[=,YZz' );
define( 'LOGGED_IN_SALT',   'D%>[U{)Ut!a2Tyya}BPkQu3gIoU2ed9n:+b+>R-YzVKk%)s>!pnVK8:4Ek.G8#6k' );
define( 'NONCE_SALT',       'R4?QJ#8H!}i+(EtgU.w,[y5[sFF&?,i~1+Zst60Jjj#?f`^{`O>{wRPKZ?PPgkBL' );

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
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
