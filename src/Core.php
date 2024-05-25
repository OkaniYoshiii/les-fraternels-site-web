<?php

class Core {
    public function __construct()
    {
        $this->render();
    }

    private function render() {
        if(is_null(ROUTE)) {
            require_once TEMPLATE_DIR . '/404.php';
            return;
        }
        
        if(!is_null(ROUTE['controller']) && ROUTE['controller'] !== 'default') {
            $controllerName = ROUTE['controller'];
            $controller = new $controllerName();

            $variables = $controller->getVariables();
            foreach($variables as $variable) {
                $name = $variable['name'];
                $$name = $variable['value'];
            }
        }

        require_once TEMPLATE_DIR . ROUTE['template_file'];
    }
}