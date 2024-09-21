<?php

namespace App\ValueObjects;

class Route
{
    private string $method;
    private string $uri;
    private string $template_file;
    private ?string $controller;

    public function __construct(array $route)
    {
        $this->method = $route['method'];
        $this->uri = $route['uri'];
        $this->template_file = $route['template_file'];
        $this->controller = $route['controller'];
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function getUri() : string
    {
        return $this->uri;
    }

    public function getTemplateFile() : string
    {
        return $this->template_file;
    }

    public function getController() : ?string
    {
        return $this->controller;
    }
}