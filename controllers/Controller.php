<?php 
class Controller {
    private Router $router;

    public function __construct(Router $router) {
        $this->router = $router;
    }

    public function showRequestedContent(string $method, string $uri) {
        $filePath = $this->router->getRoutePath($method, $uri);
        require_once $filePath;
    }
}