<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'odhiya-ztech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bismillah*@1442' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rq?dJC,4Jme.sxWdaZg!Zz Q%,^Tbir%[MPpM+^U7uKe3ETC9OM7|-;GeUiql+a:' );
define( 'SECURE_AUTH_KEY',  '4v,`B*?Cec(033 l:n%R(L{4@~|#6QCR+U}0e>iD9(t9:Alz>*fy)}TfPMCj3Asw' );
define( 'LOGGED_IN_KEY',    'u&6j^T@5kV8uSIh:,Nz:>AQ|$#;_cG(])ZH0ey9N8n0ydH_6x0ao6IBPF7o7W;,&' );
define( 'NONCE_KEY',        '+r^?s(,|9?*n&cL$yp]d0eSOie0U<:Cm&bX{+/C|.Uf1NBX)Yj.%E[[appuj50*K' );
define( 'AUTH_SALT',        '^2~Q6IaCz,210Q o3^b`x=n#<PI<!u?z=#^lb ojge4G+}[mh0GBC:kdBu}48WF}' );
define( 'SECURE_AUTH_SALT', ':qnt2ukY}%|<0V7]A9}IS)JO&YJ~Pqe,5V`$5Q%` %CF_z:v!P4il&[gnfeVra).' );
define( 'LOGGED_IN_SALT',   'gm*se|UEti}F3rkvi=@1KD w]+s oO(qE8x_J-??Jvhr|f$E,)/r0m?:7Q1pP}vZ' );
define( 'NONCE_SALT',       '1HFqzs^a(76*=IYxOVx:q,fKO%(ofHv]<%O_,F$}k]h1*gP3k^DM,a!My~*N^)SF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define('FTP_USER', 'houriya');
define('FTP_PASS', 'Bismillah*@1442');
define('FTP_HOST', 'odhiya.com:21');
define('FTP_SSL', false);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('WP_HOME','http://odhiya.com/');
define('WP_SITEURL','http://odhiya.com');
