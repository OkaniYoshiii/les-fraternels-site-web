<?php 

namespace Controllers\Pages;

use Models\Router;
use Models\Mods;

require_once PAGE_CONTROLLERS_DIR . '/PageController.php';
require_once MODELS_DIR . '/Mods.php';

class ModsPage extends PageController {
    private Router $router;
    private object $modsModel;

    public function __construct(Router $router) {
        $this->router = $router;
        $this->modsModel = new Mods('mods.json');
    }

    public function showPageContent(string $method, string $uri) {
        $filePath = $this->router->getRoutePath($method, $uri);
        
        ob_start();
        
        $mods = $this->modsModel->getMods();
        
        require_once $filePath;

        echo ob_get_clean();
    }
}