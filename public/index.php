<?php

require_once '../site_config.php';
require_once '../config.php';

require_once MODELS_DIR . '/Router.php';
require_once CONTROLLERS_DIR . '/CoreController.php';

$router = new Router();
$router->setRoutes(APP_DIR . '/routes.json');
$currentRoute = $router->getCurrentRoute();

$core = new Controllers\CoreController($currentRoute);

$core->render();