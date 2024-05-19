<?php

use App\Objects\Route;

class Router
{
    private array $routes;
    private string $requestMethod;
    private string $requestUri;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = explode('?',$_SERVER['REQUEST_URI'])[0];
    }

    public function setRoutes(string $routes_file_path)
    {
        if(!file_exists($routes_file_path)) throw new Exception($routes_file_path . ' is not a valid path.');
        if(!empty($this->routes)) throw new Exception('Property "routes" in class Router cannot be defined multiple times !');
    
        $routes_config = json_decode(file_get_contents($routes_file_path), true);
        $this->routes = array_map(function($route_config) {return new Route($route_config);}, $routes_config);
    }

    public function getCurrentRoute() : stdClass|null {
        return $this->routes->{$this->requestMethod}->{$this->requestUri} ?? null;
    }
}