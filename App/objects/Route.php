<?php

namespace App\Objects;

class Route
{
    private string $method;
    private string $uri;
    private string $template_file;
    private string $controller_name;

    public function __construct(array $route_config)
    {
        $this->method = $route_config['method'];
        $this->uri = $route_config['uri'];
        $this->template_file = $route_config['template_file'];
        $this->controller_name = $route_config['controller_name'];
    }
}