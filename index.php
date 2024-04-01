<?php

require_once 'config.php';

require_once MODELS_DIR . '/Router.php';
require_once CONTROLLERS_DIR . '/PageController.php';

$router = new Models\Router();

$router->addRoute('GET', '/', '/home.php');
$router->addRoute('GET', '/mods', '/mods.php');
$router->addRoute('GET', '/liens-utiles', '/liens-utiles.php');
$router->addRoute('GET', '/credits', '/credits.php');

require_once MODELS_DIR . '/Database.php';

$db = new Database('localhost','mods_db','root','');
$mods = $db->getMods();
print_r($mods);

// $controller = new Controllers\PageController($router);
// $controller->showRequestedContent();
