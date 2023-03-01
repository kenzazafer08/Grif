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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Grif' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#U.ajb&Dr.21OR^~JfO00xLB/[h&m~sHJ?TN-x|,dG2h E$dB,tp.![PS--$b4Z7' );
define( 'SECURE_AUTH_KEY',  'XmAo]>%)7{n [CT<8~@ie0i&B`O>f@=MKKGmhUdR8YOQ6r!Hnhwf0!D$2pC`{A|`' );
define( 'LOGGED_IN_KEY',    '}u%C#wI/%% }W`E%EPn6{:;<XyT%Tq|}wm=am]GB@P5J<9A-I*Iig /+AIIP<IEN' );
define( 'NONCE_KEY',        'ni~_!CM/IqTolf/5=@NYo:>HEnmWw*oC}qZX<)ED;)2PA3yJ5]NjdNZCz*)UXvDD' );
define( 'AUTH_SALT',        'F>G8IB&K)R&TQi9%hgY&}LQ7`/R2|?$FLxu%D^.$i^}{{L bq@L3*Sk[j)gUJ$2)' );
define( 'SECURE_AUTH_SALT', '#K?l~#5aK_fsG.LL8c8tS%meE[c$&?r%E4m7(B/0h[,41GTtfHC]HWGH6m}JC44V' );
define( 'LOGGED_IN_SALT',   'c1@D;11uO]iIirc=R_lSN I.:<0_~m8t:zW%^.`HRDL[)Jt@B|4rmQ&,t$@zZ0fx' );
define( 'NONCE_SALT',       'zKu=k|V2p2z=j02u[wJ^##hM)aPDpZt~1y?qr^ajF?py~bd9?xZ3G!v(@rf2l.5)' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
