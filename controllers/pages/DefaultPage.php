<?php 

namespace Controllers\Pages;

use Models\Router;

class DefaultPage extends PageController {
    private Router $router;

    public function __construct(Router $router) {
        $this->router = $router;
    }

    public function showPageContent(string $method, string $uri) {
        $filename = $this->router->getRoutePath($method, $uri);

        require_once HTML_DIR . '/' . $filename;
    }
}