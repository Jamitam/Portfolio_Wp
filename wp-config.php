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
define( 'DB_NAME', 'portfolio_wp_db' );

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
define( 'AUTH_KEY',         'G^/W9)r@U+<0B~t_L]R3qmJhE~3LK_u:(pU,@OxVyv1J%9)R#FhCoa/Cj.QN lC%' );
define( 'SECURE_AUTH_KEY',  '3PGPcwPpIRa(8E_ha3Q=&4UZ~:vyWbMO)1h?s(,z?[I1ng!&1f;.>vZN+vz>vLoP' );
define( 'LOGGED_IN_KEY',    '8G|Lo TSt!$A]P0g/_vo`<D]~SBI]s`WVVR~d<hwBd_hUNRVy|LYlpvy.??RMzg!' );
define( 'NONCE_KEY',        'wU21C5]wVM)vB*S=uvJeEu%O[epbFlZ/<)T%dqa8Ebat1&dPo,nC -*y{mAvP8RS' );
define( 'AUTH_SALT',        'H~RBeVw43x}`=14WFEy7wX?3]=,M>`|oi737Ba!{`>QZE_x{}[(``u {.6/vtZgT' );
define( 'SECURE_AUTH_SALT', 'pk!{yp]{06%RLol<6k2H8sY36_4~$A-KVvGAu);X1oK:daG.VO;=9F2z00r[;:w[' );
define( 'LOGGED_IN_SALT',   '_u$C+o|}:XIG~><gvVR2/AG5 ayjPq{0H>W[4kM9&M;6JWPP=H`}`sv-bTfsAber' );
define( 'NONCE_SALT',       'K`pYw *m];/Z<#k+(cU4z_6z>6Cv340atjw_uK3Ir-cx{vpMixMlh9cHN^]iszbN' );

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
