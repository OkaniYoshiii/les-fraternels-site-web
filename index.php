<?php

require_once 'config/constants.php';

require_once MODELS_DIR . '/Router.php';
require_once CORE_CONTROLLERS_DIR . '/AppCore.php';

// require_once PAGE_CONTROLLERS_DIR . '/DefaultPage.php';
// require_once PAGE_CONTROLLERS_DIR . '/ModsPage.php';

$router = new Models\Router();

$router->addRoute('GET', '/', '/home.php', 'DefaultPage');
$router->addRoute('GET', '/credits', '/credits.php', 'DefaultPage');
$router->addRoute('GET', '/liens-utiles', '/liens-utiles.php', 'DefaultPage');
$router->addRoute('GET', '/mods', '/mods.php', 'ModsPage');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$pageControllerName = $router->getRouteController($requestMethod, $requestUri);

require_once PAGE_CONTROLLERS_DIR . '/PageController.php';
require_once PAGE_CONTROLLERS_DIR . '/' . $pageControllerName . '.php';

$pageControllerName = 'Controllers\Pages\\' . $pageControllerName;
$pageController = new $pageControllerName($router);

// Données utilisateur ! A traiter !

$pageController->showPageContent($requestMethod, $requestUri);