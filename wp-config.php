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
define( 'DB_NAME', 'studio' );

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
define( 'AUTH_KEY',         '%TFp*vDmO>K!ou$WogW&E-N1XUbBOnRL6tL/-vvI1Ws|gzPzg_ `Lm[g3z3EZ-c*' );
define( 'SECURE_AUTH_KEY',  '#3{.AJTjRnjTbtFNjgDsyc5/ ,7D{H<M%f8E./_}%kEf;v%rZLGk2ApcT.@VIMCp' );
define( 'LOGGED_IN_KEY',    'W^7C)$!.n-c=;[%X%X*_%5G!5DC!VIJ}BPMXNge1KC_)Gf_zY!~i]3vsovKj O86' );
define( 'NONCE_KEY',        'eonxtPU4{E`Er:#4!kbb-Omm0NYylc+p#aq]CXQ+uHD6+7yx9.F}Y&56af0b+K2f' );
define( 'AUTH_SALT',        'K~Ni=J|4t+@_lqD[[1@Xz$P|LGMgM6)HO}6>}!vN&C7Q)*@LcS@;b:r=tmLmTIVB' );
define( 'SECURE_AUTH_SALT', 'pm.QH+uv1la&iYC6eoo^:*PXN]vjXd7^`P[d:^at$.($9v:~])[M%NN%? /Q~F$u' );
define( 'LOGGED_IN_SALT',   '73CQu{qO&hx6sqD:puLk0{:!RAdbt$G(c#Th_8_*k9~{`?|URDEVtiDE]mGud&_f' );
define( 'NONCE_SALT',       'R=|_[e@2d9jhE/cq,5D^GUExJV#a=g>IX5d~U`Ki!9_8y):H5EtnN,_+}?F!XI=#' );

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
