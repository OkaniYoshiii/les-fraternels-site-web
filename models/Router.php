<?php 
class Router {
    private array $routes;
    private string $basePath;
    private string $defaultRoute;

    public function __construct() {
        $this->routes = array();
        $this->basePath = 'views/';
        $this->defaultRoute = $this->basePath . '404.php';
    }

    public function getRouteController(string $method, string $uri) {
        if($this->hasMatchingRoute($method, $uri)) {
            return $this->routes[$uri]['controller'];
        }
    }

    public function addRoute(string $method, string $uri, string $routePath, string $controller) {
        $this->routes[$uri] = [
            "method" => $method,
            "uri" => $uri,
            "routePath" => $routePath,
            "controller" => $controller
        ];
    }

    public function getRoutePath(string $method, string $uri) {
        if($this->hasMatchingRoute($method, $uri) && file_exists($this->basePath . $this->routes[$uri]["routePath"])) {
            return $this->basePath . $this->routes[$uri]["routePath"];
        } else {
            return $this->defaultRoute;
        }
    }

    private function hasMatchingRoute(string $method, string $uri) : bool {
        return (array_key_exists($uri, $this->routes) && $this->routes[$uri]["method"] === $method);
    }
}