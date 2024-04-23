<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'As(7YzU$DP4@vmeaS9pAno.DiX>%l&ZQ9$J0rZa3X+5)%KI/0y)qFD~~f&d~.(xI' );
define( 'SECURE_AUTH_KEY',   'H`>S55h5oSY7]H$m/-9!tb={]9rg^mnJZ;Q|pQ@Wn!?3Xf?vXnD)wp4Ou?VHsCR5' );
define( 'LOGGED_IN_KEY',     '}q)62Y#i7M! rTm Yjsb-_wj;Br+J:#Cv{F=dQx(YZJB*%oP*J:Mc@2@RAG?uN<r' );
define( 'NONCE_KEY',         '5 ]EXj1;Wk=A_!RP+QmAs$!q(kTE*qS*rjuLvaHGYII*MNlc5r&v3ioOls}_&v18' );
define( 'AUTH_SALT',         'ci!**8wQ,:?ARGo3goacKr<rP:71{rc=[Rx8V|QF:hhfhdg <wNoy^-P*,zm^p)G' );
define( 'SECURE_AUTH_SALT',  'PZ?6K>92;dFRp+E4a613QgPszj|q_5Qa)Ovz?:(T$+M~.%VoOw0$U9Ck~<(f(ql7' );
define( 'LOGGED_IN_SALT',    '=c3|N|dJ3,X+!x=jQB-J^=BR.k)Z q7+rb?Exki37u,i8{~qXdm T$}OzB.oWVAu' );
define( 'NONCE_SALT',        'E$^6Jq?lk*Ev%Eqhc$G!g>W_s9~,f@WRn}I_?K x]!L=Sa`f[1?qh=ML6P3|>%7A' );
define( 'WP_CACHE_KEY_SALT', 'i=fGBL@*#TvO!C%?aJ10q!Rbv6YP8N,~>^r:,SYbLoEA}3_}?MYgj6j0>S]kdhpj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
