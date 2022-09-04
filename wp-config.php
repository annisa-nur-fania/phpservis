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
define( 'DB_NAME', 'servisanisa21_w803' );

/** MySQL database username */
define( 'DB_USER', 'servisanisa21_w803' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E@D4[S][9Pap@4oI' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'xaoqdfodfwpfnek8m2gdrxvrrhogvpbyscxo1wxddyxye99zetkavulfkzmukc9w' );
define( 'SECURE_AUTH_KEY',  'dxwuut3hqzsxd6dgblfxdjk8pxrclsfpo54ihzriash2fax2kol181vhen4sj0cr' );
define( 'LOGGED_IN_KEY',    'ih2hl63gj393goc6twozfoqmcoispsnkfftmoetygain3vhpclrqljcnkzseqllm' );
define( 'NONCE_KEY',        'pgkrayixhdvj8kae3brjzgy1oic22xfg0raf6kzpevw5ol3crjtcdrfr93ty4hbv' );
define( 'AUTH_SALT',        'hvdaotjewvyhwrpni6jnrmuiohkmapdbzrveulxvl1qq5prusbilvbarc8s72czw' );
define( 'SECURE_AUTH_SALT', 'z1awuwxmyn2uudefewldasewogn2dlrcbp1t3oyq2mhimyqszx71qhylcjpjm4w6' );
define( 'LOGGED_IN_SALT',   'ybut1fmlk0p1frpb7rt5ybeaah9axaesb8h4t8iri4pczmflto7gmmwmf0lnupbc' );
define( 'NONCE_SALT',       'ivv1h3vlqoxbnkqvdxarog8gjvkrsbr2trawsrkkmmufaersozacol1hv7sbunic' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnc_';

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
