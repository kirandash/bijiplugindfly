<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bijiplugindfly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7SFP7:;334clfSi0m>(%*7C{1<8!]CCj1G[D5Z8t?!LbgN&U;fwK*_ghtWs~~Z0-');
define('SECURE_AUTH_KEY',  'ma8Gg+&UZq7866-py]J08kMXkOPaJllB;C|> aV|,Uoab >5*I)+AEhIUmpoN-K>');
define('LOGGED_IN_KEY',    '(>4PNopL_8Mbm}]N.+<GHo-}<7S{D-f<?VsKxErhwGD{sz%:=g)cwJ88&:{L{X5G');
define('NONCE_KEY',        '(L|DMdRfnm+|ZE1@j[q|PQ;an2EMr;_cBs!{r3B_4V6aws}s5c !V/SRROW.Pzb#');
define('AUTH_SALT',        'N+!IolVyq*2RVKS-y/js+4nR_f&++/:0_)eHC`U{{z*|t1(hZS/$W2^bOZ|)^yl@');
define('SECURE_AUTH_SALT', 'Q*|0/k2ZD#]h}NK:lyB72JGhe6Mn(359w`*:&jh~wA9nt*{|Xl~nQGFbG7_,72d3');
define('LOGGED_IN_SALT',   '.+(W{9g& v,#1c|Z-xg-}R)f3=v=rR<4yY2K.fCN+-,xX[$1:&JQ1kGm>>$Akfn4');
define('NONCE_SALT',       '9;J@]#hCsa(g|ZaduxS7@Kxn7,/ODWYq[*K;3P!y>fwE5&N#-X!/i|PnT_7>(^U$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
