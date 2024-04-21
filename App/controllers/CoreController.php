<?php

namespace Controllers;

use stdClass;

require_once CONTROLLERS_DIR . '/DefaultController.php';
require_once CONTROLLERS_DIR . '/HomeController.php';
require_once CONTROLLERS_DIR . '/ModsController.php';
require_once CONTROLLERS_DIR . '/SingleModController.php';

class CoreController {
    private stdClass|null $currentRoute;

    public function __construct(stdClass|null $currentRoute) {
        $this->currentRoute = $currentRoute;
    }

    public function render() {
        if(is_null($this->currentRoute)) {
            redirectTo404Page();
        }

        if(!empty($this->currentRoute->{'controller'})) {
            $controller = new $this->currentRoute->{'controller'}();

            $variables = $controller->getVariables();
            foreach($variables as $variable) {
                $name = $variable['name'];
                $$name = $variable['value'];
            }
        }

        require_once HTML_CONTENT_DIR . $this->currentRoute->{'template_name'};
    }
}