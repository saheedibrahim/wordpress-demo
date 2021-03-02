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
define( 'DB_NAME', 'wp_demo' );

/** MySQL database username */
define( 'DB_USER', 'wpsociety' );

/** MySQL database password */
define( 'DB_PASSWORD', '4H1BNqpj1TISZgPy' );

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
define( 'AUTH_KEY',         ']*`|L5cu@rk_Ek,tYwZ]%:#p|$^M[Q!/%B`Fj:JZ.YvgrRYMopL^WU&EFp|HY8Qv' );
define( 'SECURE_AUTH_KEY',  '2}FyI1I:m>O;_%}R`@7pEJ0S;OV,Ag7!0J?PdWz.5JgSFm7q?:7JKq{PG|hl^nHW' );
define( 'LOGGED_IN_KEY',    'L8-+hxS+ez?;<o*QEouOGt5iWH/1TePH,dGu]fjj%QsE4W1[nUo%Q74a;(:TuC[T' );
define( 'NONCE_KEY',        'DJdiS7UL#T(/9j!|q!Y=T`UwZ]%`g6n,ftU:i/4<Qo{BU@n&@UZUKAM5Dd3*vDv^' );
define( 'AUTH_SALT',        'NPG_3i)_!VWrpDfJNMaNPJyhI*#_30@nO9F Y#GrMD#67%}GN^A;mmNz2K=YHj(6' );
define( 'SECURE_AUTH_SALT', '<SYtp=Oon.4:9A{s8+_X@@.CJBW<8r?P2rnTPAz)}NM9e%nf)~p^$KL-6*R/P_It' );
define( 'LOGGED_IN_SALT',   ';+8Kg7KlM+!tU2;S:>n1xaz`]2TQm6X78R&.r=QkFD-w*<_`W91uvB6Dpn/hZ^N_' );
define( 'NONCE_SALT',       'k2?{.;oXL]5nZzuoN>FsqwQA#}v0H|!:%4}Kl/U>^M`FKCWl`H,Iu^}>`u=0q?ks' );

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
