<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q6+e?WN4qeJ5,iM7%FcZ0@FVmQzSS9~e*v7hKhnUZiOvL7D]C4^S5[EA!b]FmT>y');
define('SECURE_AUTH_KEY',  'BtP~mSac -7i/hc:|M1SPB4JS4&I7wM|NICH+32NG5TXbymavRQT$Vg92q>aVFuh');
define('LOGGED_IN_KEY',    '67kC|NsBc rmkP.;R_#_1;DPYhww3^Yo)kU!ox_%iC4$KQKw_g9Y|Y]x(aJr$CdP');
define('NONCE_KEY',        ';)c;^Y$<mPA&Oec)CO`;AE$?y>:Kmv-r$?h%))X7At4?.Vm/zw9D02*a4~y?d3OH');
define('AUTH_SALT',        '(P#L.aUi(pTXHtg#qki#?t;ZxnaE=RVaq1)aKQkNAS=Ak{h{3lU:@2_Y|-pq?}uN');
define('SECURE_AUTH_SALT', ':WWt^6%?sml&ej9%[BZ)I~&~E4F@nCfmkFgFwn=d!sS4D.!-l45;qr>Q{7qNVWwy');
define('LOGGED_IN_SALT',   'FfSXkin/!BA3$hOe<W^<nT26#@cYyzMgWYzpAv[IkFVRr?1vtUQk{v-QyD+ WX8.');
define('NONCE_SALT',       'AGaI6524 K*4brUsZNnK+S=wp!}w3|^,%S::le]]I?AcP><F(yPn0sLnee5k?FeY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
