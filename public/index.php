<?php

use App\Core;
use App\ValueObjects\Request;

require_once "../vendor/autoload.php";

// CONFIG
require_once '../config/config.global.php';

define('REQUEST', (array) new Request());

// CURRENT ROUTE CONSTANT
use App\Router;

$router = new Router('../config/routes.json');
define('ROUTE', $router->getCurrentRoute());

// CONTROLLERS AUTOINSTANCIATION
$core = new Core();