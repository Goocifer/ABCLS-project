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
define('DB_NAME', 'idee12_abcls');

/** MySQL database username */
define('DB_USER', 'idee12_abclsu');

/** MySQL database password */
define('DB_PASSWORD', '+_Jmf]DB,.8U');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')cLk4E/9-U={(s_G9fSd,7_&!L?<K7mgH;Y|J}*4Y|9#7D@;.4,SAl?7DZ#<cf97');
define('SECURE_AUTH_KEY',  'te@I-0k[6Af7~r$G2W2[r3uC) iw}(H+yuj5!;8J!@:yx1XedNe-KD&zB-$E++:b');
define('LOGGED_IN_KEY',    's)Q1K7KH?+ y;W$Dk``6ud9+exM09&UhN%!XHceD(hIi<+tB6ED0S|R8;eU_MZ?]');
define('NONCE_KEY',        's(T)qf1g2zv/Fv&>)w+O1bo~-< bfXMc-lj/AH>D}9/yG$^p@6;G-mPl_;8$QB]}');
define('AUTH_SALT',        'NJ;(<QC1hk|{>v[>^R.DKs%|=,#s!(/c]=~@<X><QOH]:uGXL-4a/J*GoQ#W+o&?');
define('SECURE_AUTH_SALT', 'o(+AB*/vrje*vsGal1KrL6FK2D[gU}8R>VNZtU}|R%@Z(D{6o|8%Ex,Np|D^r@[-');
define('LOGGED_IN_SALT',   'TK_,I %e1moM<HhaW}F9f-DTdo|+^WHb|}q^)D)PVpry;Sr~r+c0q[Z|3uZec{]`');
define('NONCE_SALT',       'XRRP~BkT`D.XiEc=0EC_^X6`Y5=eOl1^*!_:i/Z3Gi{( d+RT T=B-Ke|iQ:q4lD');

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
