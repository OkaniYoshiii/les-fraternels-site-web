<?php

namespace Controllers;

require_once CONTROLLERS_DIR . '/DefaultController.php';
require_once CONTROLLERS_DIR . '/HomeController.php';
require_once CONTROLLERS_DIR . '/ModsController.php';
require_once CONTROLLERS_DIR . '/SingleModController.php';

class CoreController {
    private object $router;
    private array|null $currentRoute;

    public function __construct(object $router) {
        $this->router = $router;
        $this->currentRoute = $this->router->getCurrentRoute();
    }

    public function render() {
        if(is_null($this->currentRoute)) {
            http_response_code(404);
            require_once ERR_404_FILE;

            die();
        }

        if(!is_null($this->currentRoute['controller'])) {
            $controller = new $this->currentRoute['controller']();

            $variables = $controller->getVariables();
            foreach($variables as $variable) {
                $name = $variable['name'];
                $$name = $variable['value'];
            }
        }

        require_once HTML_CONTENT_DIR . $this->currentRoute['filename'];
    }
}