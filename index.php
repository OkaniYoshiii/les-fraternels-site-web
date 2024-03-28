<?php

require_once 'config/constants.php';

require_once MODELS_DIR . '/Router.php';
require_once VIEWS_DIR . '/View.php';

$router = new Models\Router();

$router->addRoute('GET', '/', '/home.php', 'DefaultPage');
// La page crédits est à refaire/terminer
// $router->addRoute('GET', '/credits', '/credits.php', 'DefaultPage');
$router->addRoute('GET', '/liens-utiles', '/liens-utiles.php', 'DefaultPage');
$router->addRoute('GET', '/mods', '/mods.php', 'ModsPage');
$router->addRoute('GET', '/partenaires', '/partenaires.php', 'DefaultPage');

// $router->addRoute('GET', '/mods/compagnon', '/mod-compagnon.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/difficulty', '/mod-difficulty.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/elecfrt', '/mod-elecfrt.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/elevateur', '/mod-elevateur.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/gyrocoptere', '/mod-gyrocoptere.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/inventory', '/mod-inventory.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/lockable-inventory', '/mod-lockable-inventory.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/lootbag-delay', '/mod-lootbag-delay.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/nos-chers-bannis', '/mod-nos-chers-bannis.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/refonte-mines', '/mod-refonte-mines.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/reward-vote', '/mod-reward-vote.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/single-seed', '/mod-single-seed.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/son-foreuse', '/mod-son-foreuse.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/stack-munitions', '/mod-stack-munitions.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/trader-lobby', '/mod-trader-lobby.php', 'DefaultPage');
// $router->addRoute('GET', '/mods/transz', '/mod-transz.php', 'DefaultPage');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$pageControllerName = $router->getRouteController($requestMethod, $requestUri);
$pageControllerName = 'DefaultPage';

require_once PAGE_CONTROLLERS_DIR . '/PageController.php';
require_once PAGE_CONTROLLERS_DIR . '/' . $pageControllerName . '.php';

$pageControllerName = 'Controllers\Pages\\' . $pageControllerName;
$pageController = new $pageControllerName($router);

// Données utilisateur ! A traiter !

$pageController->showPageContent($requestMethod, $requestUri);