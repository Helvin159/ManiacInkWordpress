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


if(strstr($_SERVER['SERVER_NAME'], 'maniacink2.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'ManiacInk' );
	define( 'DB_USER', 'helvin' );
	define( 'DB_PASSWORD', 'dora0411' );
	define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'Pfmd1dQd2k5XciEsaHt39BmpHXNYtL8ich51Y2p+sbUcW6QxFUlZZnNRGiaagm3KUOEKgSLQrv9KVRWb2Glqeg==');
define('SECURE_AUTH_KEY',  'V6YvjgFxYutgexUEzzlh55JJ/RKjuUJgJwialsaWMiDse+wR2ecpXBHPNVGdS8B4D5iKuzSV3LLoVtk9V52p2Q==');
define('LOGGED_IN_KEY',    '5ms7g3J7ODKvYB+rFs0GGpoOpekD8h4xxvvAJcXKPBbtsXUVbp0fKq9Xyy90jJLW9cgH7OtU/yw1ycHAgXEymg==');
define('NONCE_KEY',        'zCWIeXt/kUPUadzd/aeb+ekinPdXYhLEFB+YU76C8flNpYiKWR6+nmHSdyB8C6YvdJRhS6Ou1vXPSe6wMpbcyQ==');
define('AUTH_SALT',        'lQEl6YFt09zqrsm427EjRMJl6PImbviY3Wipd2HqSBIJIkCW2SkdhPAd4S91HNThs6c+6DCzA13+S1FBsX2rGw==');
define('SECURE_AUTH_SALT', 'SfDcUhW4k6CZLyd5mbpvY1nN+8EQF4UZC1TyIyNnEJuhtJBa0Y+zFRoKcqgMnh4XXFRPMfqkdUmVykKJts33Cw==');
define('LOGGED_IN_SALT',   'rce/kIZ9ZgDDOV8SedTyp2m4jOhCUxPu2oAhnNmOiJKK8t2QPoa4hGxv4kFtRdgkHFaV4iu2urjF0FwNQX+iKg==');
define('NONCE_SALT',       'ohXlgZ0t6+uBn5kh9wm7znKGbdsEKwEGHYFR3ICTG/2YIWiszHPblXbOo/5iDiQ8IQNeCCecch5CAc+RO+D8Xw==');

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
