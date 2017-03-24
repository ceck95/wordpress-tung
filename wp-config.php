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
define('DB_NAME', 'bds');

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
define('AUTH_KEY',         '`$n&yEdJ<AX?p*N(eG5W.NYFFkv~N|t(BJ(Xjc-W@1?6q}8(v`ZW)u`pPWXr5E#x');
define('SECURE_AUTH_KEY',  'l=KQ8wec@^(dvgT5J#@O4XfNep]*]XE?,ko8r-2~ }b$RKwnV-mp>CopCo/K(Gr}');
define('LOGGED_IN_KEY',    'yz,~@@S,SNh9 ??zl452#6{ )2~!2F`A{X&%u{$f/iae{Q}G82]-yH>ruey|2OFt');
define('NONCE_KEY',        '~-0T=U7t3=~c4 hmV5Mf{~{~7Q`)_j6qjuXXC{uYKPx*UvhYmf(7gdVoP~:4%1+0');
define('AUTH_SALT',        '5twt;$Dxs])opv.E]imeG:4.A^|NE;=Aq<+~k[.--WO4$ul)bG.mlRAz_nZ$v}%v');
define('SECURE_AUTH_SALT', 'H,.jzh7+T89Hn*=V8?2^h>vLN,^];8K[y!px%q`$]yuN}.CFL_VWmf~X/ak?UtS|');
define('LOGGED_IN_SALT',   'qU1z7WqF)|p(9.P5/^q,d~5NB!83ZD279!Z?v_{l.&t45ljt9MR@BrocN!u4^^r{');
define('NONCE_SALT',       'Fakb*{SY;(fNtI9+jA%dKQD.w3@5zFbP! %DV7xYhXm-c02 (]={t34*orU(%|>n');

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
