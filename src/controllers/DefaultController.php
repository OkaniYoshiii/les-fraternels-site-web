<?php 

namespace Controllers;

class DefaultController {
    private object $router;

    public function __construct(object $router) {
        $this->router = $router;
    }

    public function showRequestedContent() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = $_SERVER['REQUEST_URI'];

        $filePath = $this->router->getRouteFilename($requestMethod, $requestUri);
        require_once $filePath;
    }
}