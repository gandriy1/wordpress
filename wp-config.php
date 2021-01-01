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
define( 'DB_NAME', 'master' );

/** MySQL database username */
define( 'DB_USER', 'master_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'M@1nS1tETemplate' );

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
define( 'AUTH_KEY',         ' e1_?I>2qz=:*O1Zy|*:G=1Yat^gF_-P;H3;S<Ayz0j!Go7:[bg&m~Im|Ym=:p1M' );
define( 'SECURE_AUTH_KEY',  'PUGq?^4[&Tk1bS+SV_>-6KolX~V3-NAdWAE_TRbD1{ o)C^v5P/.u.g8lgH|i|9(' );
define( 'LOGGED_IN_KEY',    '^NWN.(T,yy;y +l+ek.Bb1R{N3<de%a|_s@w!t;&: JLX;3;&.gx+ f#_bxuNpF!' );
define( 'NONCE_KEY',        'Ep9tBC$Qf _`QrP)nQHu2<i~2&,`s?1qG%kH)],S9go}:7u<mCW7<Do,2=sWi<Vu' );
define( 'AUTH_SALT',        '{bW*FM@+jA-V{W+~Va(BW2dJ%HFfP+a|gxd?s>1AGS60S2Ii5f7ho+)Uy{WYK/rm' );
define( 'SECURE_AUTH_SALT', 'X *~xci&YnAr-&`s,K@I}1S=9d.ZLuJ%nP9Lw<gi6DE??QLEW636X`WL#_Mkij,h' );
define( 'LOGGED_IN_SALT',   ':XQaq0fHn%at:wwvIzRceg]8K[-G*(K4&wgaAN?<a1i?*Roed@0L/Se6i,f++le>' );
define( 'NONCE_SALT',       'h97!,[G50>>s>YFq?=%m+u[]m7#o`GMmmN^G5qqZQQ6@u)6Y%q#jZLS&m/Bp-dWK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mr_';

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
