<?php

namespace Models;

class Router {
    private array $routes;
    private string $basePath;

    public function addRoute(string $method, string $uri, string $filename) {
        $this->routes[$uri] = [
            "method" => $method,
            "uri" => $uri,
            "filename" => $filename
        ];
    }

    public function getRouteFilename(string $method, string $uri) {
        if($this->hasMatchingRoute($method, $uri) && file_exists(HTML_CONTENT_DIR . $this->routes[$uri]["filename"])) {
            return HTML_CONTENT_DIR . $this->routes[$uri]["filename"];
        } else {
            if(!$this->hasMatchingRoute($method, $uri)) {
                $error = 'hasMatchingRoute a renvoyé false.';
            } else if(!file_exists(HTML_CONTENT_DIR . $this->routes[$uri]["filename"])) {
                $error = 'Le fichier : ' . HTML_CONTENT_DIR . $this->routes[$uri]["filename"] . ' n\'existe pas';
            }
            throw new \Exception('La route ' . $uri . ' ayant pour REQUEST_METHOD ' . $method . ' n\'a pas été identifiée : ' . $error);
        }
    }

    private function hasMatchingRoute(string $method, string $uri) : bool {
        return (array_key_exists($uri, $this->routes) && $this->routes[$uri]["method"] === $method);
    }
}