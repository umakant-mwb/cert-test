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
if( isset( $_SERVER['HTTP_X_TEST_REQUEST'] ) && $_SERVER['HTTP_X_TEST_REQUEST'] ) {
    define( 'DB_NAME', 'tests' );
} else {
    define( 'DB_NAME', 'local' );
}

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
define('AUTH_KEY',         'ZmfMcbfx4EaU0yFjFYvuPfWt9zVCDO2+0X+yDwMxFosNlaMunkKIswr5szd30PwlzgfHcAFs0mbiJij8rpU0uw==');
define('SECURE_AUTH_KEY',  'TSkQ62rPfv9+d2CsQ9ywFpvav+byxCyKeBCmZf20qvDCHHTbnX9wECjVvcjfj4/SfiG7KWr7Ol2Lw+Z9LXmV6Q==');
define('LOGGED_IN_KEY',    '1x9Sc7B8SKW+97ZarMqrdXSJkaQ/opLuj+Fe2sinjezqHNZQuNcgsGduZdG1yHOAW0qPur7U+5PM9S2xUOIHpA==');
define('NONCE_KEY',        'IPSfogj5Nf1cflKIhLVV1C7X7XupaOBxI26a6EZAE/cWfs5tA9M3Cf/+/Fa8akrVAQQwGne+Vlx3F/zeI6iYwg==');
define('AUTH_SALT',        'VMJJJ3c/IBziFzMWwLq2wGXqbsAU2kCfBpDenNRsdkBczXdnCEBU8Mgyw5zueBRVRTTAFZVrE/5WkFZ+ys/d7A==');
define('SECURE_AUTH_SALT', 'Np7BYo8Bt3ncJCMdk2s85qJ5UIWNfqJrXZSHcmK06vS5ynDnbRu+IsOIzg0y/g/a9ADs69afw5o8falQjRLJSA==');
define('LOGGED_IN_SALT',   'StwYdAyTLE57qzhQdWpoSuadcYxes/ubDMDuQLM8B40Os3wXfR7J+cXqpqAQ0vzSKsSk9Wz/U8DxmHnk5AfX6Q==');
define('NONCE_SALT',       '1ZypS2O8/eHjL3LsQhhhpHh44MWJMvOZPTeFJYOYaR6FQIdsjWE50X9ORgHX8Lm2UeA4m1IKFESIqOoCXrkaYQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
