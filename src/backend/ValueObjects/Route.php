<?php

namespace App\ValueObjects;

class Route
{
    public string $method;
    public string $uri;
    public string $template_file;
    public ?string $controller;

    public function __construct(array $route)
    {
        $this->method = $route['method'];
        $this->uri = $route['uri'];
        $this->template_file = $route['template_file'];
        $this->controller = $route['controller'];
    }
}