<?php

namespace App;

use App\ValueObjects\Request;

class Core {
    public static function init() : void
    {
        Request::init();
        Router::init('../config/routes.json');
    }

    public static function render() {
        $route = Router::getCurrentRoute();

        if($route === null) {
            require_once TEMPLATE_DIR . '/404.php';
            return;
        }
        
        if($route->getController() !== null) {
            $controllerName = $route->getController();
            $controller = new $controllerName();

            if(Request::getHeader('CONTENT_TYPE') === 'application/json') {
                echo $controller->getJsonData();
                die();
            }

            $variables = $controller->getVariables();
            foreach($variables as $variable) {
                $name = $variable['name'];
                $$name = $variable['value'];
            }
        }

        require_once TEMPLATE_DIR . $route->getTemplateFile();
    }
}