<?php

require_once MODELS_DIR . '/Database.php';

class SingleModController {
    public function getVariables() {
        $db = new Database('localhost','u547807080_mods_db','u547807080_I78AyjIn','*yTmaY+v^U5');

        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];

        $variables = [['name'=>'mod', 'value'=>$db->getModByUri($uri)]];
        $db->closeConnection();
        return $variables;
    }
}