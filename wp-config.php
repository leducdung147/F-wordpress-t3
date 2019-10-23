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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',Z=ZTYHEkV RJO^e^jUF^0V.[Zg}AY2_ &x$LpwS@016VGLyk,^+~>IBolP.AX@+' );
define( 'SECURE_AUTH_KEY',  '~kCk%:/4$>kQ$Fnbx!SOU!`4Ped[YS-w8}h)B]-J9bI@IIME-q?&1^0gE{GPe&1d' );
define( 'LOGGED_IN_KEY',    'Uuh0Px^9[%W0<OHeUEn0/!MBmN,VR;~r5}`.^%JnvB2FI>MQ_8fZ,Vu`[)>Frs#4' );
define( 'NONCE_KEY',        'm2tT_{T[DkO/4Z(]iJ#i0O&WZH%5dP1Wz+kK/tEf?6[?Io>>G +ahTad[b=]CzK^' );
define( 'AUTH_SALT',        'rB,$A_)PR.262ATAU|W XtnScWcYi$^Hq Noj&<(M0tFtQAqZ0=+bV+6LMR7uZN5' );
define( 'SECURE_AUTH_SALT', 'jmC(_#+33pu 3to=j0Nwiva[@5pgO@fr5$s8UX_lESv=D~HWDm$S&kz~E]-D5-_+' );
define( 'LOGGED_IN_SALT',   '`)DmaA4T-b~!>Nd>9,n[ 94iS4C.!^fP&5rTd-D;QTOCE:vLawQ0(>>RrryZ/jsm' );
define( 'NONCE_SALT',       '<kYv:VZ7#DX^ gdrBw*rfTJxCa{2aHT*Z,K`nhh*d@U?jiaNv/C;|hC,_C(4/2,q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
