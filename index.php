<?php

require_once 'models/Router.php';
require_once 'controllers/Controller.php';

$router = new Router();

$router->addRoute('GET', '/', 'home.php');
$router->addRoute('GET', '/mods', 'mods.php');
$router->addRoute('GET', '/mod-transz', 'mod-transz.php');
$router->addRoute('GET', '/mod-lobby', 'mod-trader-lobby.php');

$controller = new Controller($router);

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$controller->showRequestedContent($requestMethod, $requestUri);
