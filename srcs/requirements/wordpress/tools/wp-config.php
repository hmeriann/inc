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
define( 'DB_NAME', getenv('USER') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

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
define('AUTH_KEY',         '|MoWqWpFn$7sEI~AJrz|ZST|/`sR S)d8dl]yM~,Z<cH7lmXO4?ha#x#7~x/%G!J');
define('SECURE_AUTH_KEY',  'ig(E(d6w3?P7N$m%x&E2Y<q=!W(#O59jC)Vk-^g`_s8M;,iWVt0}&joT]x5_(sF6');
define('LOGGED_IN_KEY',    'cqp].jN#hYP80W!V&+;Cv7HH!CH:EW+cL3y>4JE+@Qj?-iEyGm=,E|7||J0#wI~2');
define('NONCE_KEY',        '|*wXHZvP%)f8E,y%WxmeIM%1Vkp2koNl[ba xOh*u]$p;+[ly!SP4cC$02|uD2i8');
define('AUTH_SALT',        '19Ar=w ;QrSrTRnyie2y%~/>Qn!5y wGjcQeRm]-#FbZ5WjHx{/D6cJKA>%cB]v-');
define('SECURE_AUTH_SALT', 'f {{~X;5CS(JX)*2{Be]B}I19dm27WgeFcA#! 3#`OY#gQ1M?M?$/_uRU RR0WAx');
define('LOGGED_IN_SALT',   'NW:9z)V$=rcb|TH4MgXl=q8hK:t+dcF|-m4)OXUoTG@s]Dg=$m?GS:Uf@M>8<wmT');
define('NONCE_SALT',       '}fzdAe@Z+AsfD-q,8Ce oS<|tQ#B@>wZ}I@wd=PCGmDtSTAD81_*$.J_olkoiX0&');

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