<?php

require_once MODELS_DIR . '/Database.php';

class ModsController {
    public function getVariables() {
        $db = new Database('localhost','mods_db','root','');
        $variables = [['name'=>'mods', 'value'=>$db->getMods()], ['name'=>'tags', 'value'=> $db->getTags()]];
        $db->closeConnection();
        return $variables;
    }
}