<?php 

require_once 'models/Mods.php';

class ModsController{
    private Router $router;
    private object $modsModel;

    public function __construct(Router $router) {
        $this->router = $router;
        $this->modsModel = new Mods('mods.json');
    }

    public function showRequestedContent(string $method, string $uri) {
        $filePath = $this->router->getRoutePath($method, $uri);
        
        ob_start();
        
        $mods = $this->modsModel->getMods();
        
        require_once $filePath;

        echo ob_get_clean();
    }
}