<?php

/**
 * App environment
 */
define( 'APP_ENV', 'development' );

define( 'APP_NAMESPACE', 'app' );
define( 'APP_PREFIX', __APP_NAMESPACE__ . '_' );

define( 'APP_BASE_DIR', dirname( dirname( __FILE__ ) ) );
define( 'APP_BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress-boilerplate' );

define( 'APP_CORE_DIR', APP_BASE_DIR . '/core' );

define( 'APP_RESOURCES_DIR', APP_BASE_DIR . '/resources' );
define( 'APP_RESOURCES_URL', APP_BASE_URL . '/resources' );

define( 'APP_VIEWS_DIR', APP_RESOURCES_DIR . '/views' );

define( 'APP_PLUGINS_DIR', APP_RESOURCES_DIR . '/plugins' );
define( 'APP_PLUGINS_URL', APP_RESOURCES_URL . '/plugins' );

define( 'APP_LANGUAGE_DIR', APP_RESOURCES_DIR . '/lang' );
define( 'APP_LANGUAGE_CODE', 'en_US' );

define( 'APP_PUBLIC_STORAGE_PATH', 'storage/public' );

define( 'APP_ASSETS_URL', APP_RESOURCES_URL . '/assets' );

define( 'APP_CSS_URL', APP_ASSETS_URL . '/css' );

define( 'APP_JS_URL', APP_ASSETS_URL . '/js' );
