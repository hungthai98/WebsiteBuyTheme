<?php
define('DISABLE_WP_CRON', true);
define('WP_AUTO_UPDATE_CORE', false);// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vit83696_thietke' );

/** MySQL database username */
define( 'DB_USER', 'vit83_thietke' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hwx6q!qQ5xAp5Lxz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '%)/_*a8R%P1]/8S_UBM0nF#&GyDXY!KsKR6M:0!x*M_963cU[(a6qPG##K#ntsG5');
define('SECURE_AUTH_KEY', 'Wm30FG#Xoh~y##MQ;jx7vZ@jl(IV3FX%Hp*w6/4wj:/)~_55]@[hR;0&2!b0L]ls');
define('LOGGED_IN_KEY', '0A;&!&o-M~bp6)f0&T9n0qP7)l3yw9+-1Va685FwK*-z+551&5+2f:0S9|T-8!7g');
define('NONCE_KEY', '0*FdqA-Dgc81vd(|MZVIP8YkF:2#794]T49S/930MTd4JR@D|3[):qL7Kiy#2(28');
define('AUTH_SALT', '6~Y4v79q28|6Y/Nq/0We5+_%)w]yyqya:;(CE-6Jw6@~]D/A33U3)@UE8e%+8:sQ');
define('SECURE_AUTH_SALT', '9X10-Egn!ui6RT3yco6919l!k&*86nGw]w6WZZE@0)0|Z:T!&w4Hu3n(dh;y0/EW');
define('LOGGED_IN_SALT', '8#Ef9MV9-2D:TaR+Q%TH3/8y*T7i8BHa8DscP9s@v0)L2X!-HUsc4-ibT:@c:ef~');
define('NONCE_SALT', '55e%E3bHN2sJ29T%FcoZl5#j5X5o(897dq_0*iDS20+9465!Y491g3jy6jp|!02r');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '0QKPxojht_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
