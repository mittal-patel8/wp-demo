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
define('DB_NAME', 'Git_wpdemo');

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
define('AUTH_KEY',         '`t2>X>H^V%3[*l[-o%Y+e=|Za|T|85H~VsifBlR:L3U#:Eh/69*S-OLSpl3i2%3X');
define('SECURE_AUTH_KEY',  'reV@BP!ap0HQ^]`oPcG;Ji;7E]ER[w/>boejE}/U5WJO5:h^vr>Zegee2:i:n)Cn');
define('LOGGED_IN_KEY',    'ngeB@]ZzATNNC;ww% 4{_9%f#:!oEQq9]_qs:}rBZmc}m7AFWq 3Z/T=%;gB!O!I');
define('NONCE_KEY',        'fi<J#j)F_$<oA YMzZ}AvH5@/FN4%<C1siwu#y3lC[}ts1rWNnT&KS/,_a<wj0#;');
define('AUTH_SALT',        '<%G+ ^[rb53pNpuJ[1neD[C((<jZ0U4K:]*/2JyjBs%E(7hHLvZIHLvPi~+l;;.9');
define('SECURE_AUTH_SALT', 'WI:`~l3R-_{!TY-4rT* o5|DylF,Wc$UD`!6>J$m-_3#lHfY^O[Y<&?-(f,C+7z3');
define('LOGGED_IN_SALT',   '`OX0jzZ^P}^.J`fmcZ3`%x%(WV{&>sucv1olSd]8`aj}=[=yXL71l#+X@3SOG,!~');
define('NONCE_SALT',       'A|n!d*Nx<OJlFdO]-w1309c8`ci}{R.{s/q2AnMe(Hugw{6b@ZCF1PFtEhXs47Mc');

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
