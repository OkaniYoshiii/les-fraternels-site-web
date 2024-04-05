<?php

require_once MODELS_DIR . '/Database.php';

class SingleModController {
    public function getVariables() {
        $db = new Database('localhost','mods_db','root','');

        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];

        $variables = [['name'=>'mod', 'value'=>$db->getModByUri($uri)]];
        $db->closeConnection();
        return $variables;
    }
}