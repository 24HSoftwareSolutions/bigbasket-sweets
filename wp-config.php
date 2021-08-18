<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
define('DB_NAME', 'bigbasket');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'welcome');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY', 'C9o6vsWCAL3DSOC1KPHTvc7xsiORaTJm6+jOyC68s6UunIahbXftqlA8eDEzcDtq');
define('SECURE_AUTH_KEY', 'yd9wwzP2z2H1F59l+80g2/IM8bIlXlNyJZoONKFPn4ZdZhApyHII/6famrLQjpm5');
define('LOGGED_IN_KEY', '2SKyE5whbf1jUIqUMPSDCCKtynIzE2n+DGQfVcz8vOU2WAdIUeIoLRoa5b2IWmGS');
define('NONCE_KEY', 'q0/iF2gkHGTl329lMFALkXUA2IVeZN4v4V7ZTRPvA/VoKNuMop5bn/5ryIAS8Vip');
define('AUTH_SALT', 'xrKx+h5yYK1TqzBcViKl0BITKqYbtF/UGSeUjSie19s1uhXt35xRQNs8bPOogoRp');
define('SECURE_AUTH_SALT', 'wCjNPVlrRwA+tc9YCjZ7sAXsS54uyFO5saE2kbRRsOzL1hIaiJBCZ1speLv4NDRx');
define('LOGGED_IN_SALT', 'EmN5nb5pjivr46uJh87YbZgY8V+cfbIMRYYX6x69lNmIciWpZ4eWf4bV4SR3FIT6');
define('NONCE_SALT', 'zJ6SE+SOsneA8kHydINFnitOv/mIWaShqLzWL74bBF6mjmgfEGiH3/8ik8eoClxw');
define( 'WP_CACHE_KEY_SALT', '@PK!Q0ZzKdXa8K#@;oH_f}7-Xc==[tUBh8eZ=hP {5r+:FMrHd%T?,:[>ycHxow.' );

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'uMPpE';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
