<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Phalcon\Di;
use Phalcon\Di\FactoryDefault;

define('BASE_PATH', dirname(__DIR__ . '/../../../'));
define('APP_PATH', BASE_PATH . '/app');
define('MODEL_DIR', BASE_PATH . '/src/models');

$di = new FactoryDefault();
Di::reset();

/**
 * Read config
 */
include __DIR__ . '/config.inc.php';

//implement later, better for setup
/*$dbConfig = [
    "adapter" => "Mysql",
    "host" => MARIADB_HOST,
    "username" => MARIADB_USER,
    "password" => MARIADB_PASSWORD,
    "dbname" => MARIADB_NAME,
    "charset" => "utf8",
    "port" => MARIADB_PORT
];
$di->setShared('db', function () use ($dbConfig) {};*/
//include APP_PATH . '/config/config.php';

Di::setDefault($di);