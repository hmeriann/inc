<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', R_MARIADB_DATABASE);
 
/** MySQL database username */
define('DB_USER', R_MARIADB_USER);
 
/** MySQL database password */
define('DB_PASSWORD', R_MARIADB_PASSWORD);
 
/** MySQL hostname */
define('DB_HOST', R_MARIADB_HOST);
 
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
define('AUTH_KEY',         '4-8&X[jwsAv%fwx~G[.cE9a!d-7(EO+|w9rkpLyQX4 +D:z*F:MIm:!OvWm&4;tS');
define('SECURE_AUTH_KEY',  '6#Cy`p7,q^DMOG]9t}1sSS9{!ly53}.<M|W}f7M!`=^}&!,X;i<6@QNFMO&ucX2*');
define('LOGGED_IN_KEY',    'xYEjTN=a-$Zh;CUK}p8n2bk GQ0*@5i?_94T/|>n-1tzSDkJ/T-_g_d>f{2[*~ib');
define('NONCE_KEY',        'B1|&(*UM?II|L>S 1|D1}uM,=SkaLx@uW%IfjG1cF-rdws<vr5;EuVR-L(d^H[MM');
define('AUTH_SALT',        '|G=fQ1wHS7]Nv /hyb{Gxm*Og3UF~|X+(D1O)cc!>DLA^0+,:04p|[:Z/G(*%`@r');
define('SECURE_AUTH_SALT', ';7jv2eF&;|Rx3v97a1|FGI|=RWsc?J{]LKD<-b!Pfta|@P`dyuZn:Y]yQT>yo[|+');
define('LOGGED_IN_SALT',   '_V(}S-ilxdu1>R>0c{Z7~4s|F3!||+9S;Ccq:J5f@l>{HHIwW7:`B9r(YFYzv#Hh');
define('NONCE_SALT',       'kmeP|UVpM_n(o@xw5xZ!2|l|,p7yB&o=gb/cME^2GQ3k~~WH@@]aAHLe.G,?L$Jt');

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