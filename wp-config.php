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
/** The name of the database for WordPress */
define('DB_NAME', 'woocommerce_online_store_wp');

/** MySQL database username */
define('DB_USER', 'root_bane');

/** MySQL database password */
define('DB_PASSWORD', 'bane1157');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '80T2N,|d.8A0?NZxGTn%9Fj<GY3-u)=OZP2Ohdy-_?q+C$>V:x>|uAgAxO2#u<*t');
define('SECURE_AUTH_KEY',  'Leu60BqX!XSxjz_(xd)!(F14H7<It9nJU{sG#/kqW#`/)!r*K/E;+1MnYzd^g,Rc');
define('LOGGED_IN_KEY',    'AI]tD*{dgsR]*[SDF0)>kBT(iN9r@y-0}b5EJ?J7J?<3a?E@TuR&fVN?jyeOQsPK');
define('NONCE_KEY',        'Ez6%Pz|A?kMzA{(<a5A8a01T=,4xbb0Rfe1]iLhR{8:t9SjlQD}^/)s1M@}:,`z,');
define('AUTH_SALT',        'Zj7?W&-;$5T3nLIl,T(afylsyd5bCCd*2i5Qs3<L7wgkYL<%|+-;0ia=#W}`j)zH');
define('SECURE_AUTH_SALT', 'Gg><sXWN6HLaF2ATlzf%Nh:NEsQ j%Q.;2x(XqS(I}7Hn$ZXSD{<4W63jely>><(');
define('LOGGED_IN_SALT',   'lxD9[6H(qr%Og4Cy#Q(y{a))n|<;8K=zs0z`#Jz;UnP% qX-I_6xYaqsLOk9~/P8');
define('NONCE_SALT',       'y@@dgar~$R$e(_b-{5 Km]MKuxI%a/e|^L5Cxu#i5J5+[Y$,[w|X$x&w]AHh4vye');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
