<?php

require_once '../db_config.php';
require_once '../config.php';

require_once MODELS_DIR . '/Router.php';
require_once CONTROLLERS_DIR . '/CoreController.php';

$router = new Router();

$router->addRoute('GET', '/', '/home.php', 'HomeController');
$router->addRoute('GET', '/mods', '/mods.php', 'ModsController');
$router->addRoute('GET', '/liens-utiles', '/liens-utiles.php');

$router->addRoute('GET', '/mods/compagnon', '/mod-compagnon.php','SingleModController');
$router->addRoute('GET', '/mods/difficulty', '/mod-difficulty.php','SingleModController');
$router->addRoute('GET', '/mods/elecfrt', '/mod-elecfrt.php','SingleModController');
$router->addRoute('GET', '/mods/elevateur', '/mod-elevateur.php','SingleModController');
$router->addRoute('GET', '/mods/gyrocoptere', '/mod-gyrocoptere.php','SingleModController');
$router->addRoute('GET', '/mods/inventory', '/mod-inventory.php','SingleModController');
$router->addRoute('GET', '/mods/lockable-inventory', '/mod-lockable-inventory.php','SingleModController');
$router->addRoute('GET', '/mods/lootbag-delay', '/mod-lootbag-delay.php','SingleModController');
$router->addRoute('GET', '/mods/nos-chers-bannis', '/mod-nos-chers-bannis.php','SingleModController');
$router->addRoute('GET', '/mods/refonte-mines', '/mod-refonte-mines.php','SingleModController');
$router->addRoute('GET', '/mods/reward-vote', '/mod-reward-vote.php','SingleModController');
$router->addRoute('GET', '/mods/single-seed', '/mod-single-seed.php','SingleModController');
$router->addRoute('GET', '/mods/single-seed', '/mod-single-seed.php','SingleModController');
$router->addRoute('GET', '/mods/son-foreuse', '/mod-son-foreuse.php','SingleModController');
$router->addRoute('GET', '/mods/stack-munitions', '/mod-stack-munitions.php','SingleModController');
$router->addRoute('GET', '/mods/trader-lobby', '/mod-trader-lobby.php','SingleModController');
$router->addRoute('GET', '/mods/transz', '/mod-transz.php','SingleModController');

$core = new Controllers\CoreController($router);

$core->render();