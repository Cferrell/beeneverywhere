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
define('DB_NAME', 'beeneverywhere');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<G/=7V1}f6jxUbFQ6lZ^JU10H>du<nKvm/rOn@5:_`K>2<rTn.;zugp<G3%H KL7');
define('SECURE_AUTH_KEY',  'X;MAh?}dvdIg}olAIdv(wW4?V4VdbKa=9._.,$oka^S3:]4XqlD^,v~{*${e%s{H');
define('LOGGED_IN_KEY',    '7E1A>.DguJ!b0Q#MkilO7L?4{#IqW_ee3ob*bWBp=Z=lVy(QA$913ucR31Zo+z~y');
define('NONCE_KEY',        '<T(qA-o;V+MNfSTr:??zt~)RNl0{aiht`=P=QdNdc:s#JsJ}D36_a.Ubl8?=!VRA');
define('AUTH_SALT',        'GADDdNA&Eg[d[XZsR+@n[5_!]RS}H2M={fepfqmIU.aVb#Du->o{}Xm4eyzAAm5R');
define('SECURE_AUTH_SALT', '(7s-jA| HXj{ 1T/LVHNH!qEg/o4,&S^@bf:qiVb`:FUIk LLNv vx6^L SC;G1H');
define('LOGGED_IN_SALT',   'idHk_Cy{Lvm.rwJYzDZ|$G7OBy$pZ#4@KT4R^.0VBmf~+alJx^IA](.F--s|,#qS');
define('NONCE_SALT',       'm:/=cVH.GfK5Va&7!qC<y^[tST1Ar{$25cwT*kguNjT$ad>;%1aw{OM4P<<En:gd');

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
