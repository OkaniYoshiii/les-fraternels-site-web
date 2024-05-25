<?php

// CONFIG
require_once '../config/config.global.php';

// AUTOLOADER
require_once APP_DIR . '/Autoloader.php';
Autoloader::register();

// REQUEST CONSTANT
require_once '../src/objects/Request.php';

use App\Objects\Request;
define('REQUEST', (array) new Request());

// CURRENT ROUTE CONSTANT
use App\Router;

$router = new Router('../config/routes.json');
define('ROUTE', $router->getCurrentRoute());

// CONTROLLERS AUTOINSTANCIATION
$core = new Core();