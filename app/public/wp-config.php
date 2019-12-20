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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/BRii/Local Sites/fitness/app/public/wp-content/plugins/wp-super-cache/' );
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
define('AUTH_KEY',         'I9TyDJPRPkZFHvAduASxDQS8WJJY0QdpvMf8FJGtOHTNlwOb4+lArPjqzBcKE4+3V9zG8JoifvEeKSJWszucAg==');
define('SECURE_AUTH_KEY',  'F6NKzCOFhVHX7Q9q9ors+m8O+2VjWlNHYNBnZoydk+qq+pwEAx7Th2B/DMggTRh3TGwVHSniikqosPMEP3XkQQ==');
define('LOGGED_IN_KEY',    '6eQWXnGSfDToxfTBCUjzekkvEO1IysHweIfg6WNiMbMJNL2NLCxPK304MNgihosPA4OkprsmWZUCEAfVmxbIoA==');
define('NONCE_KEY',        'F0P1R1+NFlUuSe0R0JrFjrVCcUn8CNyLSBmW/fBqkn4Q47XgpWTzWaZxXzKlswV2BLWXxDbey889Dnt1FrLWPw==');
define('AUTH_SALT',        'J3c17ja8A7CDjPABEYfdmW6qgYOdWak7sA9VEeAQ5nvTTvCLVyawsp3Hu/rjs1Bbsgd5UHNa/WosUygeDLSXJQ==');
define('SECURE_AUTH_SALT', 'L7bNf+lUJG8V2RGCvTDqKraouYF5MSYyVwCb7AOa55gViNycvNSTZ2s7EMpYOn70qwN0FEXcghY8h54Pv980Pg==');
define('LOGGED_IN_SALT',   'h2cqLxKswDpN5WDL0woqY0RySEOCZ+CfFJvnKtXXrx88YDZoKzu06cudzQfvSAKdZVjTR68Wz+G7e/sSUoTZpg==');
define('NONCE_SALT',       '/l5qML6U72tLoeRWCbXswE5v/XXKbJU608/V0+mOuWD8iF4E53chMtcx0Dr3SRvcx96oSxKOLl5GWA2JlpHyVQ==');

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
