<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ccdHexa' );

/** Database username */
define( 'DB_USER', 'ccdHexa@' );

/** Database password */
define( 'DB_PASSWORD', 'Ccd3m$%100' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gZ}l0Z10hJ_=`871p<6a{0a=r1dH0pVZ<s[@ {81b5M? HwLEUy{S;lBz_Vq1al~' );
define( 'SECURE_AUTH_KEY',  'O%|39PkQMcMZpEsV|u6sgzcO!0-M^K#CD)**oJs%{+7{<i}Y!rn:^#0n#D#PYXo<' );
define( 'LOGGED_IN_KEY',    'yot9P;jhZt<edl(Yd(QP9fgs{3gQC%F]3SeU(Py,/QFd}2-ja?Oyt^D?6Ub)QNCQ' );
define( 'NONCE_KEY',        '1w#O 6LXD11 5HQtksqS9vLP$PQr/@a,Ik9!6M;:O8WTTCFsN0{Zv/Gui~#uvV!-' );
define( 'AUTH_SALT',        'OmYmrQQ+u9ZI:l5Kw^=m7#!F&&ZrSfP@vUq8jv/_m-TDM+pybm+Uk2}{eA,oA Bb' );
define( 'SECURE_AUTH_SALT', 'KKUk=N[Z&%-vA3^Xc#-G4hw]zm5CCcNBk3j)tzC=_[v(M:wIU|xYK!CQYV5NrU6b' );
define( 'LOGGED_IN_SALT',   'L-1qrel?059ZXm{OPJpcXxaLSVs^LU.>FBqn89)g@#g8cKQRCnJ@t5XiV22)YC[v' );
define( 'NONCE_SALT',       'jis19!ns{MUq0&t 8IyQ5(B/(EjJSIn`Dkx4d6SYB!ilu>wu7GSI4Xv}Y!LIK{iY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tareq_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
