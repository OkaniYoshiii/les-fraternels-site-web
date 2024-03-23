<?php

require_once 'models/Router.php';
require_once 'controllers/Controller.php';

require_once 'controllers/routing/ModsController.php';

$router = new Router();

$router->addRoute('GET', '/', 'home.php', 'Controller');
$router->addRoute('GET', '/credits', 'credits.php', 'Controller');
$router->addRoute('GET', '/liens-utiles', 'liens-utiles.php', 'Controller');
$router->addRoute('GET', '/mods', 'mods.php', 'ModsController');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$requestedControllerName = $router->getRouteController($requestMethod, $requestUri);
$requestedController = new $requestedControllerName($router);

// Données utilisateur ! A traiter !

$requestedController->showRequestedContent($requestMethod, $requestUri);