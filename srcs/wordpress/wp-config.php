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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASS') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );
// define( 'DB_NAME', 'REPLACE_DB_NAME' );

// /** MySQL database username */
// define( 'DB_USER', 'DB_USER' );

// /** MySQL database password */
// define( 'DB_PASSWORD', 'DB_PASS' );

// /** MySQL hostname */
// define( 'DB_HOST', 'REPLACE_DB_HOST' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=u`MPV8d-pa/;Xq+,@,.=Xwfb-r=VbCJ?}|FptDp%7KKo<Wg>;<|+RP7w2UZsqBD');
define('SECURE_AUTH_KEY',  '.*$o5XmJ)-F|7xg |S}+5#  ]8U_gWNib&q<|%ho@@Tnf0<+{+1&uS ?s[(!w@Mn');
define('LOGGED_IN_KEY',    'Zg<YRTG:<Mne$#dmWk,0^sAsxrc}^Y)nub+9*:`5H90=Y^*M]0##{LmsU;^JVEtU');
define('NONCE_KEY',        'T.js3JlnQ7k0Kp>+{9EXubyd*0[cR!.]xO5n:Y};|!}Uq0z?O5DgD^e~x-qI__Dy');
define('AUTH_SALT',        'Ie2eiy06i{[a$-Ka+8?4u93(}i$  4t~6=Z+oXAg,e|-o`>2ry3D|]G!:lF^@$Od');
define('SECURE_AUTH_SALT', 'h{Aci;[-Tezs#SI[ %IC7lyO#HL_GjYz|<NG)jU+jKZCxr[*EZjJfja|djJ+E1=9');
define('LOGGED_IN_SALT',   '+j(=HZl+HcO/|5NA5h.1bnAJ>Y`e2^-uDhXr[[;>-Va?_hz09oE8yyD~-#j&TnB0');
define('NONCE_SALT',       '%dhtV>UHimYAoT,mmdG=F{xbe@,vk61#|NmTX3=hRLTVv)[kO`@hY^GZkUn}SaYx');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
