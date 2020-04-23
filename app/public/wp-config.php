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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mAhH1XebV23J7OY/Qk24fM8/uyEfGHLEfzf6mbHz5LuvyR1cEFu7olyOFLALHzHpO/fdhy8jUgh4/4ITtREzsw==');
define('SECURE_AUTH_KEY',  'RHgOKm24db4sKz/sjQxVt8g18o///PYkpxtUm2A5O0Jz6nxTQAu5ifR9PrwgeQUbPK5l+GnOs/vAY/PY6GQfcQ==');
define('LOGGED_IN_KEY',    'AW+1DdZkriEk200/JJDn9IqblGQu/rVAlyKnMMqaC+vNf35eptgrSmZcK6YlliBhebVfR33HUpYQJRd7F/ioHg==');
define('NONCE_KEY',        '9gMwWfzOeIbNRBK/fJCLWxtgsHuEMkWthYU1oMLHmd7A7A6LFGdrd3ywMjc8wqzbenldwd9d39JzhfSLg3yvWA==');
define('AUTH_SALT',        'VTiZI8i8tWSqzM9+3rTYo7gWBiWniF6Y9QpverlLtua7Nucj7gZYWrcVTbcZXakX6oZ+1CU+8Ld1sEoq/0l2Cg==');
define('SECURE_AUTH_SALT', 'by1+kLmKS+pt8TukUkXDjr4707o6dHjVusz6El0KGB23mRL9B+IfVxEpeUlL1F1/Avdu/MYROyhyAfKdeIpqqQ==');
define('LOGGED_IN_SALT',   'LZtiVNlzTyCaRKjR8xEuOD/z2BCO5A9I6G6aih83DIqkhajA5eO9IhREse6/PXBHwtHR9NCJEP92HsWPEf6mtw==');
define('NONCE_SALT',       'c7RColunAAnpGxgomIhZAsf1dfekRBtJjz7+Cig8lr9gccAkJuAXC7UWbhnDzVmgQ9j+bGmfZSB1N0+Sg5tOcw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
