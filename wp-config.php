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
define( 'DB_NAME', 'ehandelOvningLabb1' );

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
define( 'AUTH_KEY',         '3km,ghq{K[J*vIBcRd (Q/RHul-&YwZvWilyRb</$V[sJIN/?NzavBEhdQ2XghkA' );
define( 'SECURE_AUTH_KEY',  'a,^?br].v-adr`Hk:@IX4]BxGa/7[,1d)kuQ}fA`jp&K95CeUl@CBh|J!@C7CChg' );
define( 'LOGGED_IN_KEY',    '*C(TDv$saeIIMR=riP!!W)s5Y RYOte^oAyS_/XZxbusrciqgI6KZNj8IaS~.Ft&' );
define( 'NONCE_KEY',        'ardhfae2QfZ86M|aW#S1:Z2|HD&@i>[XxGt*<+)9|M+HBMDy_oAp|C!`Mur9uV*B' );
define( 'AUTH_SALT',        '.ZQ1%tcaf/q,q,9^~^k{&_d>5{>hKP0f@8J/:.oKp/Td1]rr&q$}X^,m*NPHdg>I' );
define( 'SECURE_AUTH_SALT', 'z1s/vIOw0uuLRPq{Yoh]j05+W?^e:M[Iwj?Xr LaRIdouB]~1Z|YaA==kP)]UP*A' );
define( 'LOGGED_IN_SALT',   '=Hv2eGW*l:L8xgQ}2ABxpP@<^8AnAR8VJY:}lGT~LK9teg`xOESh.q68n`Dg}O_w' );
define( 'NONCE_SALT',       'L%[Uqp+.#t!qgIS>2Brg:k#9(c(g51W3GLtZ<Qbk$Z.!/-n:t&VEkT]j(Qo0bJsQ' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
