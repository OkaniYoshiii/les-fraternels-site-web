<?php 

namespace Controllers\Pages;

use Models\Router;

abstract class PageController {
    abstract protected function __construct(Router $router);
    abstract protected function showPageContent(string $method, string $uri);
}