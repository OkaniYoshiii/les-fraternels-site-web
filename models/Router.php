<?php 
class Router {
    private array $routes;
    private string $basePath;
    private string $defaultRoute;

    public function __construct() {
        $this->routes = array();
        $this->basePath = 'views/';
        $this->defaultRoute = $this->basePath . 'home.php';
    }

    public function addRoute(string $method, string $uri, string $routePath) {
        $this->routes[$uri] = [
            "method" => $method,
            "uri" => $uri,
            "routePath" => $routePath
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