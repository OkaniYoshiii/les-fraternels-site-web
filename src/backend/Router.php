<?php

namespace App;

use App\ValueObjects\Route;

class Router
{
    private array $routes;

    public function __construct(string $routes_config_path)
    {
        $this->setRoutes($routes_config_path);
    }

    private function setRoutes(string $routes_config_path)
    {
        if(!file_exists($routes_config_path)) throw new \Exception($routes_config_path . ' is not a valid path.');
    
        $routes = json_decode(file_get_contents($routes_config_path), true);
        $this->routes = array_map(function($route) { return (array) new Route($route); }, $routes);
    }

    public function getCurrentRoute() : array|null {
        $requestedRoute = ["method" => REQUEST['method'], "uri" => REQUEST['uri']];
        foreach($this->routes as $route)
        {
            if($route['method'] !== $requestedRoute['method']) continue;
            if($route['uri'] !== $requestedRoute['uri']) continue;

            $currentRoute = $route;
        }
        return $currentRoute ?? null;
    }
}