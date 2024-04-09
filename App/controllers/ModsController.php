<?php

require_once MODELS_DIR . '/Database.php';

class ModsController {
    public function getVariables() {
        $db = new Database('localhost','u547807080_mods_db','u547807080_I78AyjIn','*yTmaY+v^U5');
        $variables = [['name'=>'mods', 'value'=>$db->queryFilteredMods()], ['name'=>'tags', 'value'=> $db->queryTags()]];
        $db->closeConnection();
        return $variables;
    }
}