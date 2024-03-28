<?php 

namespace Views;

class View {
    public function renderHTML(string $filename, ?array $variables) {
        if(isset($variables)) {
            extract($variables);
        } 

        require_once HTML_DIR . $filename;
    }
}