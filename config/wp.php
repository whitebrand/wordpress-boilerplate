<?php

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * Environment only constant configuration
 */
if( APP_ENV == 'development' ) {
    /**
     * Enable error reporting
     */
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    /**
     * Enable wordpress debugging
     */
    define('WP_DEBUG', true );

    /**
     * Sets home url
     */
    define( 'WP_HOME', 'http://localhost/wordpress-boilerplate' );

} else {
    /**
     * Disable wordpress debugging
     */
    define('WP_DEBUG', false );

    /**
     * Sets home url
     */
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
}

/**
 * Sets site url (wordpress core files folder)
 */
define( 'WP_SITEURL', WP_HOME . '/core' );


/**
 * Sets language
 */
define( 'WPLANG', APP_LANGUAGE_CODE );

/**
 * Sets language folder
 */
define( 'WP_LANG_DIR', APP_LANGUAGE_DIR );

/**
 * Sets content folder
 */
define( 'WP_CONTENT_DIR', APP_RESOURCES_DIR );

/**
 * Sets content folder url
 */
define( 'WP_CONTENT_URL', APP_RESOURCES_URL );

/**
 * Sets plugins folder
 */
define( 'WP_PLUGIN_DIR', APP_PLUGINS_DIR );

/**
 * Sets plugins folder url
 */
define( 'WP_PLUGIN_URL', APP_PLUGINS_URL );

/**
 * Sets default theme
 */
define( 'WP_DEFAULT_THEME', 'default' );

/**
 * Sets uploads folder
 */
define( 'UPLOADS', APP_PUBLIC_STORAGE_PATH );

/**
 * Disable wordpress auto update
 */
define( 'WP_AUTO_UPDATE_CORE', true );

/**
 * Absolute path to the WordPress directory.
 */
if ( !defined('ABSPATH') )
	define( 'ABSPATH', APP_CORE_DIR );
