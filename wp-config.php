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
define('DB_NAME', 'desafio21');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ZjU!~b$$U##:R2{psL4Yz1So6o=mqUZ2!d}!cbtw?fs0JgGCf*kG#B&WLX>!#(#A');
define('SECURE_AUTH_KEY',  'E`<3$l# OF![%M*+1`nQ9<eTcEr)#HmjW&s`aZErv4]*fuMlMw:S2N{w|W:F+&gx');
define('LOGGED_IN_KEY',    'c{6?`}~<rGJ&IK7j^HV0MCM#-8d,w&l?+/14Yx?vN]m4-z8+CwIx{,?FF9dA?;z ');
define('NONCE_KEY',        'YKvu@b[FUd~$5V3_:uN?#h?eZ>wSuf1|+Kh{Oa^;:v2lBc`0Jp9m=25eEz(*.<>}');
define('AUTH_SALT',        'h6EGdF+!-$Fh|!o<$4D%gF~U@1/8hcFJ+ ^]3mMH8SjJ(vC`8Du=0=k2S/M(jH,G');
define('SECURE_AUTH_SALT', ' bN5k~UAc>TERV0l?Su)J~PNQZ7?#Wf:`,SeGA[y,dYM;Sd/p=eX e$88azZ;[D0');
define('LOGGED_IN_SALT',   '_ jeXI+#0L5bG!:v^v:kv:(Mv,o+6 Zv{QTup!@{9mq+uf1D<h&%)*B|;:/Wav??');
define('NONCE_SALT',       't`ZgI_2P^<Ii8ucAw[8Q=sx2?A1KRo3n}CAw>/Ejf>UBC3V[MvH4*L/,,;*}]DKU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mx_';

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
