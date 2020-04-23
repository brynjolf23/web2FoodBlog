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
define( 'DB_PASSWORD', 'e206ea7553a752cb6332607699c8b309b3c40f2b35140f30' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '}gRME>0CSNK`!P6tk$X%Kb]avLuX_R-MyVp[<i!6V/;#O)c?Tejh2Gy/X)<2=)gm' );
define( 'SECURE_AUTH_KEY',  '=#wz8f]j)CH$~w^!6(-{||mVl=gywHiN-2GR8U9y.0D51KzE-w/Ck79C:(&Go}9Z' );
define( 'LOGGED_IN_KEY',    'K-nKyr)o{*0,dw$Vcs]Ei1zqeeYi/EMB]>U!bQp;&9VTm`|B}T6`=PH8SfZuea:j' );
define( 'NONCE_KEY',        ':Wdo_sVFCjhg`bvGi!5TaF5Ml.S!j;%1*[wa{U}QLmi+1sk`[fHtf|s+ (S~7z1P' );
define( 'AUTH_SALT',        'O>b|Im}P@|?kJzH|=@(nOHa~::OUlf]N;?EUc@mj#>K6qz-QCFkbyy#{q4$;Q92y' );
define( 'SECURE_AUTH_SALT', 'pk8C;3(=1&5Ol#:<Lbue.d!P#S!qn`9wEAg7}J@bpA0Xv&~:k,P!49^!B:!ZW~Eg' );
define( 'LOGGED_IN_SALT',   '8hrg^Q3gC.+X<)(^zYOR`0Hd 8(L@G9rK4D:Tok^#bMbS~>&c*`*iETl]0]iMdZb' );
define( 'NONCE_SALT',       '`9F7%c)-8-W*s G5*A62D+#GUvo? rrI{+N>y,SP;jRZK[DlZ=i*PgSvD.!<H3fn' );

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
