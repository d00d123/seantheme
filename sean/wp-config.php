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
define('DB_NAME', 'd00d123_wp2');

/** MySQL database username */
define('DB_USER', 'd00d123_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'W(sT7MHYT5J~GdOB]r(18&&3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'pDiulFjZesDC9jU0yyAWUmJhU3G7dAgz6yBmUPep4ly8DXq5Gmr0btxU711Pn8xz');
define('SECURE_AUTH_KEY',  'U5pSmSu2vdbhAh3cmQ3TYSq9ixWGqLS2dT44CVDbsDgjRLEbq22LmmyUvpcNOyj0');
define('LOGGED_IN_KEY',    'k7w05UvaLeP4PKwnIUKFXHuWEYdQFCsQgDPpdKFk9bT0ZdzfMI0P8YfZlSF8vkas');
define('NONCE_KEY',        '75hAVlOzwhGQAGEDG6iBxYWB0jDrl5ihHEuLHeCnsEYDAeF791KblqfgEypUPXGb');
define('AUTH_SALT',        'avU3rl6ooLaZ710aEc55EYwTEKkHHnAMLnJw6pD7wNwwPjqdT9CXaK4m3O8QHaD9');
define('SECURE_AUTH_SALT', 'SOj82jclpKjM6AogOdgzWdwiVxB2k93pe7SJz12S5x5rwlFdymOlRbJlEpHPeLkz');
define('LOGGED_IN_SALT',   'dGjqxCgJkUYilQNdRC60Sl067XlfFx58eiyTx9n90ua3z3YtwIquXCfw4oqDZt4C');
define('NONCE_SALT',       'Fkd9KEzqDPB6oFfI8U1huJ0ZtfulEPODGSEIsdr3ue1WBhpaGoiQw2YHh7wa0O42');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
