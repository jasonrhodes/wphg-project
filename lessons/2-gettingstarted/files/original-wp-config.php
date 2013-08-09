<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'project');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
 */
define('AUTH_KEY',         '[{~U<gT8+Y|!oMDLD6]M+95uxS6QXl,ZFu*+-a$-p.Bv(ZAc.dgfvwrHx[YzF1r:');
define('SECURE_AUTH_KEY',  '?!N_7l<9347cy&`|i/ZvS+=.?L1v(aa5i_/<Ob$}-3`]=oU{-uj-*|G%BHOxKc*j');
define('LOGGED_IN_KEY',    '8PGPMzEe-y^LGZH&,26.i]yqWQ+*KBME{`#Y.`9A?-qb%l9TFzZ=8-:*`_Cw[UBW');
define('NONCE_KEY',        'Z{[o2!tND/}>5C 2J+;Cne:x5:=U){m&()HTPpH(kgE2o+^-zJZmA6}QRZ]7V #e');
define('AUTH_SALT',        'e*q& C)*hcEs|?MF>Trm~EtR}nS6mQqN9ijBHst4Cv%6.JIw<V[1ah(o!#F!1pHl');
define('SECURE_AUTH_SALT', ':t2E7hgp^RQcn>wiZznrApNY].QKRl6IwdbHC}J%RWq*]vrP.!UPuNaRr2C9PA0b');
define('LOGGED_IN_SALT',   '9[+phOO,AJ7[)`F(d-kx[<Znwu(P5z{HaY+-v,*fI?2-nWxAs<rgK=)7-jx_y[c=');
define('NONCE_SALT',       '1T2#[U-|I.4[aYh<A3_~Xt-.|lszlt^%?na(t^/+gZy=_]46J=dMG.eh_g=zk3cT');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
