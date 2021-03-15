<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '%X31U$`v>x~/|q*HcbR(F@dApEL+Qwk(zKi-NA7q-Y;P/y231acE 1&%+9EvSu{G');
define('SECURE_AUTH_KEY',  'v8;D=e-xH,C/v>kLeQ,}[mAY+#7o-GlBYfK{UFjdReN:l1jF$r-Ftb%7/[iAIN#l');
define('LOGGED_IN_KEY',    'j/B`3agq5(q-d6EH&^y-p7Uc,,){Sz$+k~/qmap!>obj]f<TzWY_ZhvZ_NtGP7>~');
define('NONCE_KEY',        'O; jA6cfG)$OT<w9hP(x;RCr3K$pD_65~R]aByhaGM#M~3`L7ul*rR?;v%,U8~rb');
define('AUTH_SALT',        '^OO+`+_.TE]TS{`;z+%+8{w90>k^e+#lndo!1):46ABC&!~3<Qsx>$79jH$vh+-c');
define('SECURE_AUTH_SALT', ',6kIB~;i7IhF!@4D2ac`jiS^eX#:/BX*bRTV_u@%$b|WFbbRlqj =!U79!C)C(E8');
define('LOGGED_IN_SALT',   '`Zs]c4#[[A$/A<HnWHe4T{Y{VyGyiZ*%IARo)xb27(zRNNT,+}~!m1c>%|-o0#de');
define('NONCE_SALT',       'krvpWjT?zePA6*Vqn}YBb):p|=MFYHUHX=BPkVnb^WKfX>f?MQz9G~c?^ShV@xu|');

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
