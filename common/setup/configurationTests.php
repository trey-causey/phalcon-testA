<?php

use Phalcon\Di\FactoryDefault;

define('BASE_PATH', dirname(__DIR__ . '/../../../'));
define('APP_PATH', BASE_PATH . '/app');
define('MODEL_DIR', BASE_PATH . '/src/models');

$di = new FactoryDefault();

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Read services
 */
//include APP_PATH . '/config/services.php';

/**
 * Handle routes
 */
//include APP_PATH . '/config/router.php';

/**
 * Get config service for use in inline setup below
 */
//$config = $di->getConfig();

/**
 * Include Autoloader
 */
//include APP_PATH . '/config/loader.php';

/**
 * Handle the request
 */
//$application = new \Phalcon\Mvc\Application($di);