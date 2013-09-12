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
define('DB_NAME', 'skakkerakk_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'C+j0cA52uoA_GUq$FfS!uo?@{-ZU!DimxN-uz4Jku>|v!RR0O+035G%Cz%p54*p6');
define('SECURE_AUTH_KEY',  'Xa1NY9lzB^K>1Bv^!+]iYojz(j|3zES .)Q}d3eA:y[YiAQQ*{Cb6Z5peyP9$}{o');
define('LOGGED_IN_KEY',    '4!~]Kz@ ~k.?l>4a+s1ABo6oL>gP~nEggzcXU<p(U0qW74F:mW4>{5n:c<-F+|tw');
define('NONCE_KEY',        '}m%C6wC-2[9l|nnb%DY~J50q@/U2ikgYPp;NWh6jq^Q6TzvJ6[Q&tNWO;ym0?N|V');
define('AUTH_SALT',        'OIm8}|-52 Fqhz+r#d-$k(-+eO1>0A/byS0.|=+jG#`9 |3K.jh4z4]p:|o=v.e+');
define('SECURE_AUTH_SALT', 'i)MGE2k-U1<tbvac~*1rQ=95b <JCh9DP9iPe/%r]9+;+[gTO:k*Em0w&puh1>nH');
define('LOGGED_IN_SALT',   'gP_+K+nIp$fu:n-P4)2=qkk%sb92.+<YyW&`vXgQ:bf_rMo]$xz.,yavkP,kz,^!');
define('NONCE_SALT',       'v8<B^w=Bx3QIQHL%=%!~=HGq2HLWJ->|Ux->K8i!gz%6_Bpdkdvh|njC3mOk=#rs');

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
