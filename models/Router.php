<?php 

namespace Models;

class Router {
    private array $routes;

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

    public function getRoutePath(string $method, string $uri) : string {
        if($this->hasMatchingRoute($method, $uri) && file_exists(HTML_DIR . $this->routes[$uri]["routePath"])) {
            return $this->routes[$uri]['routePath'];
        } else {
            return '/home-2.php';
        }
    }

    private function hasMatchingRoute(string $method, string $uri) : bool {
        return (array_key_exists($uri, $this->routes) && $this->routes[$uri]["method"] === $method);
    }
}