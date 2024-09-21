<?php

namespace App\ValueObjects;

class Request
{
    private static string $uri;
    private static string $method;
    private static array $parameters;

    public static function init() : void
    {
        self::$uri = explode('?',$_SERVER['REQUEST_URI'])[0];
        self::$method = $_SERVER['REQUEST_METHOD'];
        self::setParameters();
    }

    private static function setParameters() {
        $parameters = explode('?',$_SERVER['REQUEST_URI'])[1] ?? null;
        
        if(is_null($parameters)) return;

        $parameters = explode('&', $parameters);
        
        foreach($parameters as $index => $parameter) 
        {
            $name = explode('=',$parameter)[0];
            $value = explode('=',$parameter)[1];
            unset($parameters[$index]);
            $parameters[$name] = $value;
        }
        self::$parameters = $parameters;
    }

    public static function getUri() : string
    {
        return self::$uri;
    }

    public static function getMethod() : string
    {
        return self::$method;
    }

    public static function getParameters() : array
    {
        return self::$parameters;
    }

    public static function getHeader(string $header) : ?string
    {
        return isset($_SERVER[$header]) ? $_SERVER[$header] : null;
    }
}