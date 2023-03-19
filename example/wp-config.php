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
define( 'DB_NAME', 'u1489146_93120' );

/** Database username */
define( 'DB_USER', 'u1489146_93120' );

/** Database password */
define( 'DB_PASSWORD', '$2y$10$Wi/MHbOZpuKeNqes17qCx.NH.OeiGx92OCXUPw3BKQyBj.n5we1DK' );

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
define( 'AUTH_KEY',         'esw4weasetwfljqbzdny2diodjp8tamgk5flaasuztf4oif2lapgka6zn61asikt' );
define( 'SECURE_AUTH_KEY',  'ufqxdslsrmtnbuesqjppj6ehml35l3k7jcvc0juamdck7ttxmp0izajbg4keiics' );
define( 'LOGGED_IN_KEY',    '2nh63eppqludqn3rjsxbonfak6li6juxcdrimiqmshqw9ue4qjzhp2a1lwsipr6h' );
define( 'NONCE_KEY',        'ao1ewlf8ngctsw9hcb4dmicatjvp7oguxz6hpaez5e32ht5o97kgjj4kmnbguz6b' );
define( 'AUTH_SALT',        'oxh14ubkul27m4qzjtd3zpmyrhelqbddlemavncimvvh8qyylffftoe2sdbf8roi' );
define( 'SECURE_AUTH_SALT', 'sppehlhdyy9hcegqw4c1sjnxdsdfcoa8s2xukaqprq6nmhha062ehxnvsvbhbzyl' );
define( 'LOGGED_IN_SALT',   '7a2yaeznpcctoqv7ibw2rvpbkk7we8buolk4ibolub7hq3ifi0ohessc3la1cxql' );
define( 'NONCE_SALT',       'ghnqkwzwpx3hubcrbwpix5vmu4zihiatp3m1voenkuqljk8gtah10fw21wuar0zu' );

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
