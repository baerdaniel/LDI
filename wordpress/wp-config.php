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
define('DB_NAME', 'wp_ldi');

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
define('AUTH_KEY',         '`n68$+CQ~G}nI3+8{v2&5F}&nx^oGqV~[n*GU/ p99LL3|`&g_gJP|ijjF5W]n1-');
define('SECURE_AUTH_KEY',  'i}.HIy=+;YkWujqf V]pnif+wEUx+Z$RZ~^%>VmbrOs^69vaT}]Oo<jJ[-rlGfO)');
define('LOGGED_IN_KEY',    '|0$%2lq_e`=o]-PB%i37)=x5q,)+Gk+s^}M~f+Ge=;#o~Y.,U>5cQIK(^1`KLSRY');
define('NONCE_KEY',        '8J.7;) I]fWny6;f**$YLx`Z=H%Qno|]bTFXJ -/Eg7&0!~%UDp1+.tw1F@P1pwN');
define('AUTH_SALT',        '=x&`|ii(+|Znj%^b+9tL~5`j{lul^@g.J|d|-^Yor={_>f&ddu`W($[c2voq:i+?');
define('SECURE_AUTH_SALT', 'za8IMf,.)t-Edi6`s3v*sOfAwE OIr)|/BfK|.A{<>fcD)CnI[4#|o!2eKA=Pck9');
define('LOGGED_IN_SALT',   '|NO~G*F)[rqA1Q>xy7G-w!=xQf.V=%wN7bt7/`7-%wS(b&5W7SNaB_:h^|,MimrR');
define('NONCE_SALT',       '+0$5W$Q,.X!if=aZg.d.gUi} >k~^+2>*+6f~{!#Z3nw<^:)THZrz-b`FYq=,u7%');

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
