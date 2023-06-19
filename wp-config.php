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
define( 'DB_NAME', 'bahrain-hydraulic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'v~.-dNy017dZt^-b}a2A_,x1uYF:94TiG- S-QSDichAOZ3W=-:XKw5wJ;]*NHKo' );
define( 'SECURE_AUTH_KEY',  'D4&Cp01jD!438;+n||6UG4zSvRpOXZAFE,k^ePg^-//;ItFrna4Fp{>(JmyV_`D(' );
define( 'LOGGED_IN_KEY',    'AYM8JqD o7,qooAE/0 +!T?Ji-{1TC>cR~yoK0(5K-4B3prUp/3BXE2,L{<aKajN' );
define( 'NONCE_KEY',        'hD!,14.)hN([oqbmbF%s`dL.p5Ul9sTn@gv_1fL;E]TB6iM{X?[.bGJn*?x A!cG' );
define( 'AUTH_SALT',        ' se 8}|`*9gS[02w?N?44&0V0:+=}W]tb~Et^ww,4 >*CEQ={*0EemR#MvsJ w@A' );
define( 'SECURE_AUTH_SALT', '6@dlyXu7!kyl@n<ggmvyNW=0_C/9Wo:Ii=`#t@&;(=Ku(4fYtT|E:W; :uIB2U7i' );
define( 'LOGGED_IN_SALT',   '8jM*z4@x~eqk`Od}mwEqEKeY>neS9~purnW3i$bqo|n7lRJonvj$JvTwD;GvbL4`' );
define( 'NONCE_SALT',       '3i>X?S_j-.}1mZ`IIi8]aLzTA-pg-XC}P~RN_tz>pkPz6UYB$4q}5oF]pBB:w>xN' );

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
