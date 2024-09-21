<?php

namespace App;

use App\ValueObjects\Request;
use App\ValueObjects\Route;

class Router
{
    private static array $routes;
    private static ?Route $currentRoute = null;

    public static function init(string $routes_config_path) : void 
    {
        self::initRoutes($routes_config_path);
        self::initCurrentRoute();
    }

    private static function initRoutes(string $routes_config_path) : void
    {
        if(!file_exists($routes_config_path)) throw new \Exception($routes_config_path . ' is not a valid path.');
    
        $routes = json_decode(file_get_contents($routes_config_path), true);
        self::$routes = array_map(fn($route) => new Route($route), $routes);
    }

    public static function initCurrentRoute() : void
    {
        foreach(self::$routes as $route)
        {
            if($route->getMethod() !== Request::getMethod()) continue;
            if($route->getUri() !== Request::getUri()) continue;

            if(Request::getHeader('CONTENT_TYPE') === null && $route->getContentType() === 'text/html') {
                self::$currentRoute = $route;
            }

            if(Request::getHeader('CONTENT_TYPE') === $route->getContentType()) {
                self::$currentRoute = $route;
            }
        }
    }

    public static function getCurrentRoute() : ?Route
    {
        return self::$currentRoute;
    }
}