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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'F=}#m[O>SzVy.>VB:~O}P<?B#cxs!Cx,5JD=YEeq|4RbAS,@2E2cBKFaXaC8$L!a' );
define( 'SECURE_AUTH_KEY',  'QGBYwQKuQ.%8CoR*2`HDMv~,(&7;%rc7;][rg:UW[:eO?p`m m7NUFXu-?sop-:R' );
define( 'LOGGED_IN_KEY',    'gPUb>=e-3s=rxRC%c$MLHSABs/n[u~wiRF2k~Smp0QZ]<W4b^WVUf&Agf.2Yuy@*' );
define( 'NONCE_KEY',        '2AX`uxwIGMdQ+~P%6V<]0QL:Xk%xb/U|($^)%4w%&6C`*9sKZ,}~F]~BA15Qqi1|' );
define( 'AUTH_SALT',        'F) `)Z;_|>dhx(-fspxq#|M__am|KIv^tFf:(t@ P?Iap}F=6C$W1O<Jp?z@h%9.' );
define( 'SECURE_AUTH_SALT', 'tCL^}vF%:a,`},P5uUdWhr%K|@AwlSg:d]g84:q`B$)F#oU`EEi6?=D8&c!Kug{J' );
define( 'LOGGED_IN_SALT',   '.kIt89I&IksjTS *|qWCSw95hjLr5HP}2{Q{6H[p{&j_OF]!TH|&nJa4CnuiT&|W' );
define( 'NONCE_SALT',       'rjvUoNTG (+y2K|(Wrgg0z)c!cy[&6rJKaLeB _TX~Az>vF_*uZ>1eWs5yhJ;afV' );

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
