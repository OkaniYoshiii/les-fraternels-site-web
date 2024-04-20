<?php

require_once MODELS_DIR . '/Database.php';

class ModsController {
    public function getVariables() {
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PWD);

        $defaultCheckboxValues = ['mods' => 'all', 'tags' => 'all'];
        $variables = [
            ['name' => 'mods', 'value'=>$db->queryFilteredMods($defaultCheckboxValues['mods'])],
            ['name' => 'tags', 'value'=> $db->queryTags($defaultCheckboxValues['tags'])],
            ['name' => 'checkboxesDefaultValues', 'value' => $defaultCheckboxValues],
        ];
        $db->closeConnection();
        return $variables;
    }
}