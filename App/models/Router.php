<?php

namespace Models;

class Router {
    private array $routes;

    public function addRoute(string $method, string $uri, string $filename, string $controller = null) {
        $this->routes[$uri] = [
            "method" => $method,
            "uri" => $uri,
            "filename" => $filename,
            "controller" => $controller
        ];
    }

    public function getCurrentRoute() : array {
        return ($this->hasMatchingRoute($_SERVER['REQUEST_METHOD'], explode('?',$_SERVER['REQUEST_URI'])[0])) ? $this->routes[explode('?',$_SERVER['REQUEST_URI'])[0]] : null ;
    }

    private function hasMatchingRoute(string $method, string $uri) : bool {
        return (array_key_exists($uri, $this->routes) && $this->routes[$uri]["method"] === $method);
    }
}