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
define('AUTH_KEY',         'enZx/gyqPSv1BHcJf44pUHtvO7Cw7JqxFiw8oKbouiEZgGmTJ4PqHY0hcaWylDseZYkKnG3gYtMqGCbAdR1pfA==');
define('SECURE_AUTH_KEY',  'c5q7xnAvlyg9b2Nnf2iypedrt9xvjJtFMO1n7fvGiSI/ULdbD/WA+aROweDvQxQGuORETPKC2ZaiiZDrxgEPkA==');
define('LOGGED_IN_KEY',    'vHaFw2cPcjIBfH1B/6N5DkcN3FsWcGQlYki0R3USIJt/uhOA2hJTHW1ZtgObiIF89YhWLync65w9S8wBIa9H7A==');
define('NONCE_KEY',        'AJrQ2NNWETf/qCTzAwFGaQXQZ5+cmAiilgISzcXlsl+3c0YJyOdgkRYZyfSUwNL9ANaWdiXrVt5WKK2LmaROnA==');
define('AUTH_SALT',        'pZHVpe/njQElhdQAr9uTAqZMmGWPdaUwNs3AuWx+kEft9mTSNICSafl5UfhBl66H1qstXnOq8Dtp76RWmYqaxw==');
define('SECURE_AUTH_SALT', 'EKHRj/jGy+4YTt4ExihQCBz8Rvrua6tg1IGM8LPRSBbFzVs391VKrjwVmHZeBKub/RPYz63DfPbrCoigIANb7A==');
define('LOGGED_IN_SALT',   'iaxg6oWbQRyfYN2ZRUCJcGxrInSRzYRfZnPuuERxASXht5BVOBooOhsZEM9NeESzR3IcOEMGFDbYn9rPeVLvtQ==');
define('NONCE_SALT',       'lUS2m7fkdwvYRBgjOzlg4Yt3ViPWpky/X8DXd5jkndMXJOg467lUDxN+s6NGzOA9CIDhjroWKCnUERgwRmvQKA==');

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
