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
define( 'DB_NAME', 'novadigitalcon_db' );

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
define( 'AUTH_KEY',         '*c-=%[7j:O.+$:teUh%9Y%3aow`<9Cj}9n+8bukirGY6vHf9sMlc2l!l@Riu:Rl)' );
define( 'SECURE_AUTH_KEY',  'aGGK{UDEP[LIr)j|{WJ/(qZ;DJZRH}FdIz=^+r8,78G0d^ew..uZ!i<~JqRl wX`' );
define( 'LOGGED_IN_KEY',    '8ai)U-`G@X?5F#%C7}%XhIj+X|oHwmAC]`B;g jNCPfBK;N5-$}KGiuB#W!~=Y1A' );
define( 'NONCE_KEY',        'XTDzjRc99g:?o_6,Y-D=J8%$wc& x1uD(3JldS-W,[tppoa);Xjc!S0gwM.d<MVG' );
define( 'AUTH_SALT',        'w.JzS;F)D/2?(a- bSnocq^!o#&[ENePNyeKINE&USrPd}e(nC&]p{?#G^ob!OSC' );
define( 'SECURE_AUTH_SALT', ']DNH1I<6B$s]vrariwqpREP]c]429V:)It|eqRY44V^+gB1e!xBb5P/0@1?C(_}1' );
define( 'LOGGED_IN_SALT',   'T{C7li20L(]>Vj)6$*`l:i]_wMYP1:n!#,)0+osUT>&& IaM&*yD5xf-j0oB%Bf8' );
define( 'NONCE_SALT',       ',3G KpGBXokM43GwSIkI(sN*PHSfQzPb/xKnShqlLGTy%38UitMpDD/;%mU2vO1m' );

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
