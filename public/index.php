<?php

require_once '../site_config.php';
require_once '../config.php';

require_once '../App/objects/Autoloader.php';
Autoloader::register();

$router = new Router();
$router->setRoutes('../config/routes.config.json');
$currentRoute = $router->getCurrentRoute();

$core = new Controllers\CoreController($currentRoute);

$core->render();