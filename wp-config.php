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
define('DB_NAME', 'kvrd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'andrew_emad123');

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
define('AUTH_KEY',         '6/% j={6:^<>IS(<2$Nnv/-Y-G0vt7MZ{maIodxm.Zb< Oyx*~Wr{>p!bO4,r=!.');
define('SECURE_AUTH_KEY',  '>nV0f6;IUZ<J:EMWW9[}|}E2^N)g!yV^RKuIi*w k8+p(G& DM NA]Qf`.xTo{Xt');
define('LOGGED_IN_KEY',    'iICf-o,`i9Sj1]`n(=Ezt0K4sM?lq]pLN&1z-Y~>2RNZ&DbUw9D8&cEq@)4Mx;J@');
define('NONCE_KEY',        'u/@JJGP_jhCOJO];PbKg8pHQyZypmS/`gt4mH*Z(00C9F^m~LDV7xd|r bRc1_LR');
define('AUTH_SALT',        'D  tav*erN,a1cXz_2DZoK&y1/+]EZbI9W8#eIb1!jg)LQCE@f5(Mn/$^g^<ZItj');
define('SECURE_AUTH_SALT', '-uqy}oI?1&31RcUyxM9>9MwC.v<LsGS!WkIx~Q!KTkH)ZCx1%a^:yE*bCE1,{Ts|');
define('LOGGED_IN_SALT',   'WEP/Eok}V}ymR7A8>-[hz4FcSb>fkrrr4H`K>g6?Te46<Z(L_0Ri.=>gd~#P9a7:');
define('NONCE_SALT',       't4b_PXv4e}/@;!qfOcV6nHIDKkf8+v-6DR$3n=U=96Ib$VrCr:_LO<e^CWHoDD{}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kv_';

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
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

