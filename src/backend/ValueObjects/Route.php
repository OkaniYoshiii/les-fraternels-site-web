<?php

namespace App\ValueObjects;

use Exception;

class Route
{
    private string $method;
    private string $uri;
    private string $content_type;
    private ?string $template_file;
    private ?string $controller;

    public function __construct(array $route)
    {
        $this->method = $route['method'];
        $this->uri = $route['uri'];
        $this->content_type = $route['content_type'];
        $this->controller = $route['controller'];

        if($route['content_type'] === 'application/json') {
            if(isset($route['template_file'])) trigger_error('Route : "' . $route['method'] . ' - ' . $route['uri'] . '" with "content-type" : "' . $route['content_type'] . '" has a "template_file" defined which is useless. Consider removing this unused property.');
            $this->template_file = null;
        }

        if($route['content_type'] === 'text/html') {
            if(!isset($route['template_file'])) throw new Exception('Route : "' . $route['method'] . ' - ' . $route['uri'] . '" with "content-type" : "' . $route['content_type'] . '" has no "template_file" defined.');
            $this->template_file = $route['template_file'];
        }
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function getUri() : string
    {
        return $this->uri;
    }

    public function getContentType() : string
    {
        return $this->content_type;
    }

    public function getTemplateFile() : ?string
    {
        return $this->template_file;
    }

    public function getController() : ?string
    {
        return $this->controller;
    }
}