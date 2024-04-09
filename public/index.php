<?php

require_once '../db_config.php';
require_once '../config.php';

require_once MODELS_DIR . '/Router.php';
require_once CONTROLLERS_DIR . '/CoreController.php';

$router = new Router();

$router->addRoute('GET', '/', '/home.php', 'HomeController');
$router->addRoute('GET', '/mods', '/mods.php', 'ModsController');
$router->addRoute('GET', '/liens-utiles', '/liens-utiles.php');

$router->addRoute('GET', '/mod-compagnon', '/mod-compagnon.php','SingleModController');
$router->addRoute('GET', '/mod-difficulty', '/mod-difficulty.php','SingleModController');
$router->addRoute('GET', '/mod-elecfrt', '/mod-elecfrt.php','SingleModController');
$router->addRoute('GET', '/mod-elevateur', '/mod-elevateur.php','SingleModController');
$router->addRoute('GET', '/mod-gyrocoptere', '/mod-gyrocoptere.php','SingleModController');
$router->addRoute('GET', '/mod-inventory', '/mod-inventory.php','SingleModController');
$router->addRoute('GET', '/mod-lockable-inventory', '/mod-lockable-inventory.php','SingleModController');
$router->addRoute('GET', '/mod-lootbag-delay', '/mod-lootbag-delay.php','SingleModController');
$router->addRoute('GET', '/mod-nos-chers-bannis', '/mod-nos-chers-bannis.php','SingleModController');
$router->addRoute('GET', '/mod-refonte-mines', '/mod-refonte-mines.php','SingleModController');
$router->addRoute('GET', '/mod-reward-vote', '/mod-reward-vote.php','SingleModController');
$router->addRoute('GET', '/mod-single-seed', '/mod-single-seed.php','SingleModController');
$router->addRoute('GET', '/mod-single-seed', '/mod-single-seed.php','SingleModController');
$router->addRoute('GET', '/mod-son-foreuse', '/mod-son-foreuse.php','SingleModController');
$router->addRoute('GET', '/mod-stack-munitions', '/mod-stack-munitions.php','SingleModController');
$router->addRoute('GET', '/mod-trader-lobby', '/mod-trader-lobby.php','SingleModController');
$router->addRoute('GET', '/mod-transz', '/mod-transz.php','SingleModController');

$core = new Controllers\CoreController($router);

$core->render();