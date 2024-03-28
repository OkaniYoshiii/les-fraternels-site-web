<?php 

namespace Controllers\Pages;

use Models\Router;
use Models\Mods;
use Views\View;

require_once PAGE_CONTROLLERS_DIR . '/PageController.php';
require_once MODELS_DIR . '/Mods.php';

class ModsPage extends PageController {
    private Router $router;
    private View $view;
    private object $modsModel;

    public function __construct(Router $router, View $view) {
        $this->router = $router;
        $this->view = new View();

        $this->modsModel = new Mods('mods.json');
    }

    public function showPageContent(string $method, string $uri) {
        $filename = $this->router->getRoutePath($method, $uri);
        $mods = $this->modsModel->getMods();

        $variables = [];
        $variables["mods"] = $mods;

        $this->view->renderHTML($filename, $variables);
    }
}