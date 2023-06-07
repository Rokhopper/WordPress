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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost1' );

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
define( 'AUTH_KEY',         'CmHOc_WJ,bi-Bvb`@LvWJG!&Gmf;`9Y(IBFXZx83!`n;W/t<BmIO5kcN~q9l5_{c' );
define( 'SECURE_AUTH_KEY',  'y|<1GAm,kzjANY7a=igm=k6B<G5_nvzV0u[vhJd6>22} 6&/6J]_H]5fuZxM`my,' );
define( 'LOGGED_IN_KEY',    '?tv=4d?Q)0TlT7K2=-`<qaQmclF.^u#izkV$R>9PQ5!;^,+}9xcnW=?;KqEh$ l(' );
define( 'NONCE_KEY',        'L$aWR3&*#a4%<XM/kZ&mqcc2/_t+w:*[:vJgpg>y*H],[g$P?0;{0d4V] 9Jx_b3' );
define( 'AUTH_SALT',        '(Zd1u{|_G9kaHTWO6LDq Rbgk~#y?d`K9qJl=8q!B19C1iR|)F-{ xqXEcH%)Mv2' );
define( 'SECURE_AUTH_SALT', 'yDuo=K;gX5HUqp(?|j:-X;qQ.vlnO/f:0m-tBeZ{%v%Y7qQhCjT-{oUS&sKyKOWS' );
define( 'LOGGED_IN_SALT',   '{2e%W)y.^cQ/,Zx)$NR)4=sR1ld}c@,UDd-QjXU^^[>>Mi*Z7aS=1Vc2F@zJk^-H' );
define( 'NONCE_SALT',       'tbX8M!Tx#3yqD@8ZJx<Ubxuy{uRd|H7bT,4[kP S%RCp9grGOektk:W7g_:`HjxS' );

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
