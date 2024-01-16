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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mariadb' );

/** Database username */
define( 'DB_USER', 'vbrouwer' );

/** Database password */
define( 'DB_PASSWORD', 'inception' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         '*i$2K;{ib(rgm^AC9Wn1L&VG:Q3[*+-,#KA%|B,89j&6Lk7oKHGX=V&BK=+DF/sI');
define('SECURE_AUTH_KEY',  ';p,Q-x>Pvt<.W]mzHJw<SX45!DaG0T_0F8T^Xt)ad8>u#Kel[+dTS!+F.o&_T#KC');
define('LOGGED_IN_KEY',    'I|rSo8tw{U ^|C-|(i.ZgZTL(rvdS-#+`q}Kwj-E)%fR.AQtR0-!W}7>X|E?M+E?');
define('NONCE_KEY',        'a-nn4H:s!9TGjq.EWt=Da&0-h`nZ9MC6]n],E. v1-Dbm*EO-@-r.F_s;2{go^9~');
define('AUTH_SALT',        'tmb%wxy8:O-DChnXyZp]sJ]yl|LHHk^)E%=aH:zlKhjIC]0P4c^]<-TD];F|>;f{');
define('SECURE_AUTH_SALT', 'm-+^X1|Z%.ePt!67D#CMr;X2-nmf~G}P| [FsKsZZ,FN .-(R<m(nlVnu:AFkl|u');
define('LOGGED_IN_SALT',   '1k6qu`83x|R|BP}h=fOH5J*m>#V:QCpc_BTodbw[dZwzK%h(y`SQ>lA2CA~4N9d}');
define('NONCE_SALT',       '<yli%SG|o ZU3+=6,x^-*aa5U5)rfV1/%qV+I+2&1FH27XFvB)c#O+e/m0Tc/wQI');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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