<?php

class Router
{
    private stdClass $routes;
    private string $requestMethod;
    private string $requestUri;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = explode('?',$_SERVER['REQUEST_URI'])[0];
    }

    public function setRoutes(string $routes_file_path)
    {
        if (!file_exists($routes_file_path)) {
            throw new Exception($routes_file_path . ' is not a valid path.');
        }

        if(!empty($this->routes)) {
            throw new Exception('Router->routes cannot be defined multiple times.');
        }

        $this->routes = json_decode(file_get_contents($routes_file_path));
    }

    public function getCurrentRoute() : stdClass|null {
        return $this->routes->{$this->requestMethod}->{$this->requestUri} ?? null;
    }
}