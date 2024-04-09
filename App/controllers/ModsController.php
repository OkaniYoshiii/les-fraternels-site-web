<?php

require_once MODELS_DIR . '/Database.php';

class ModsController {
    public function getVariables() {
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PWD);
        $variables = [['name'=>'mods', 'value'=>$db->queryFilteredMods()], ['name'=>'tags', 'value'=> $db->queryTags()]];
        $db->closeConnection();
        return $variables;
    }
}