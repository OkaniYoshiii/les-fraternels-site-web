<?php

require_once 'config.php';

require_once MODELS_DIR . '/Router.php';
require_once CONTROLLERS_DIR . '/CoreController.php';

$router = new Models\Router();

$router->addRoute('GET', '/', '/home.php');
$router->addRoute('GET', '/mods', '/mods.php', 'ModsController');
$router->addRoute('GET', '/liens-utiles', '/liens-utiles.php');
$router->addRoute('GET', '/credits', '/credits.php');

$core = new Controllers\CoreController($router);

$core->render();