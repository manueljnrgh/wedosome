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
define('DB_NAME', 'tintnews');

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
define('AUTH_KEY',         '#^N,@Y,>A/CZ7&;95K49E9A`#$}9QS65ka;00oK].f5C}zh8f/&u^|ky^F*D,%*>');
define('SECURE_AUTH_KEY',  'ZU~Z968^/b5uHb8:ME=zH)e<gdBNC1Jb~sJ8S3XHS6}]@y^+ J)0/&bT_!mPW8._');
define('LOGGED_IN_KEY',    'GaQO>(`wT070cUnb[5_/b#dg|hP=#)!u/&V$/0;8b*QvS-81y@]BBj6hZ]|o7NgL');
define('NONCE_KEY',        '<C#U!Gkfv0 VBaSl|Xa#^}-h]l0< *BdjE#+!YpY{RKSF1JQqr;u$XauOYh6X@a$');
define('AUTH_SALT',        '(#3>W$ZnM$/p2FQkq0:B#.sddIHc4vw-2)pa#O<4Wb5>0 SI1]m%#NR|Lz=s4>LV');
define('SECURE_AUTH_SALT', '(a]H5jD#(]fZkLE_Vp(2JaDyzk,G}O7c/:+7~iuvrfJ:NqgCNHZ~G3p+}?}wjE>J');
define('LOGGED_IN_SALT',   'd>=HP6iqtd$IokbM-2VMml@=t&slxmtouay}7ad7e7IEP`i,FTb<OS)165O]{!;6');
define('NONCE_SALT',       '>C{hn~NZj_0Tt;`1jZ35KB71u(=)B%KeP!o(;a%%doc}+};5O(?SC<L6l<a!dL#B');

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
