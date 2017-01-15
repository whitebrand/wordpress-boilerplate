<?php

/**
 * Sets app configuration
 */
require dirname( __FILE__ ) . '/config/app.php';

/**
 * Sets database configuration
 */
require dirname( __FILE__ ) . '/config/db.php';

/**
 * Sets wordpress configuration
 */
require dirname( __FILE__ ) . '/config/wp.php';

/**
 * Sets up WordPress vars and included files.
 */
require_once( ABSPATH . 'wp-settings.php' );

/**
 * Sets theme folder
 */
register_theme_directory( APP_VIEWS_DIR );
