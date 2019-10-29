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
define( 'DB_NAME', 'berberi-im_db' );

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
define( 'AUTH_KEY',         '#1r5|hy}Nbj}S^C_Pl-Olu@=O$FDe+5nE~O2N-pw@~pM..wf9]c?IV$IP:mnt.g,' );
define( 'SECURE_AUTH_KEY',  'd{n/JX`4ajnv,-6P$B{UIyy}]o(<~PUPefS%>Iv>=`^pZhnHU:<<N5^xwKIfi.zg' );
define( 'LOGGED_IN_KEY',    'cF,|J1d7W}21|2C0D[B|fN%O<mlTF7IXUl48 h;!s3wSpj0`#?OZU9&h!:e]eyA~' );
define( 'NONCE_KEY',        'DK{15F~C8Uo~JWFN`+x+H$b:44mtK,5<A$Q5b&8FjdHui[;v#di(Vhx|KH%VM,;x' );
define( 'AUTH_SALT',        ':e-[5$L61~au(SGDcKWV#[u0*VLV>SuHRVx3[ Gjh4K?]BHhvc^ZGyipJGSEc!Un' );
define( 'SECURE_AUTH_SALT', 'QhC~_( ;rV&KL1E}*R*`Ag/@Jc#<Pj}{45Ih(7*U;Hx`ra`=.(U-L)vet7Yb}$2y' );
define( 'LOGGED_IN_SALT',   'Xa>.^J?*?P=(-})nwxx3yL{1&)U|d: l:.tL*F{^@_p&:5 F?8-Ud~E iG+xcB7?' );
define( 'NONCE_SALT',       'L|S-GC^,3U;v<Kc*^f}z3qgfFG5+tZ~n%+*E3SqBw}-UxPBLWH)dvG}#ij6}0.Q:' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
