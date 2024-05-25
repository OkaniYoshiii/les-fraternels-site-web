<?php

class Core {
    public function __construct()
    {
        $this->render();
    }

    private function render() {
        if(!is_null(ROUTE['controller'])) {
            $controllerName = ROUTE['controller'];
            $controller = new $controllerName();

            $variables = $controller->getVariables();
            foreach($variables as $variable) {
                $name = $variable['name'];
                $$name = $variable['value'];
            }
        }

        require_once TEMPLATES_DIR . '/content' . ROUTE['template_file'];
    }
}