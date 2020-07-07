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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9a=MlMh.{hu1@Z+)l}0D.hTyl/ps4VH&k&gvYBd:P#C.4nmG!Btv&HA:VI;mwDi9' );
define( 'SECURE_AUTH_KEY',  '+tJ`P^[ehH8^yRe6[hyWFspIOnMKfd%!S+>S!) $U&N8[Ua@uJ]Q-h5$P5C+{SQb' );
define( 'LOGGED_IN_KEY',    '2 Im`.a4!Pjy0tf%N5:d/6E+^k;Ma7y2X7%@ZWpZLtv+ov^~oY@au3ciJ;!ib$h9' );
define( 'NONCE_KEY',        '..Bgc@+.pAg~RvdaT51yOH&y`Fe:0~=d]-T-<{e)qnvW7`YOZ8,oO6v{dt-{:Wr2' );
define( 'AUTH_SALT',        ';SP<u,)tm:)aB$=?il6:rR6mN2Y)Vu%8tI=F$0L.vIhgj3%bP_(DQzGPd)<>i[,y' );
define( 'SECURE_AUTH_SALT', '1(Ujd&}XT=YLvF6DgQs^4u-=m=&q&IY?[L8<-e2tG5KkmRUFu}iLN{KN5bg~h)26' );
define( 'LOGGED_IN_SALT',   'CR6hKu^Y=^A +{[OwlP`+M/s.d`]aUxkZ=-3Y;&7scKb@D1ZE. i_0! #QU:z/1d' );
define( 'NONCE_SALT',       '@wWjREM`4dGF6^*4/uXDiyw+}s|ARl2f&(k9_z395yq]P1PyXxK>:6k!HjSSk[.j' );

define('DB_BACKEND_URL', 'http://localhost:9000');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
