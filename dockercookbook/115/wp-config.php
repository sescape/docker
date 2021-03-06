<?php

// ** MySQL settings ** ///
/** The name of the database for WordPress */
define ('DB_NAME', 'wordpress');

/** MySQL database username **/
define ('DB_USER', 'root');

/** MySQL database password **/
define ('DB_PASSWORD', 'root');

/** MySQL hostname **/
define ('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define ('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define ('DB_COLLATE', '');

/** Authentication Unique Keys and Salts */
define('AUTH_KEY', 		'put your unique phrase here');
define('SECURE_AUTH_KEY',	'put your unique phrase here');
define('LOGGED_IN_KEY', 	'put your unique phrase here');
define('NONCE_KEY', 		'put your unique phrase here');
define('AUTH_SALT', 		'put your unique phrase here');
define('SECURE_AUTH_SALT', 	'put your unique phrase here');
define('LOGGED_IN_SALT', 	'put your unique phrase here');
define('NONCE_SALT', 		'put your unique phrase here');

/** WordPress Database Table prefix **/
$table_prefix = 'wp_';

/** For Developers: WordPress debugging mode **/
define('WP_DEBUG', false);

/** Absolute path to the WordPress directory */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
