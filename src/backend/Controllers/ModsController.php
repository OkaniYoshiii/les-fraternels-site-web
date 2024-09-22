<?php

namespace App\Controllers;

use App\Database;

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

    public function getJsonData() : string
    {
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PWD);

        $defaultCheckboxValues = ['mods' => 'all', 'tags' => 'all'];
        $mods = $db->queryFilteredMods($defaultCheckboxValues['mods'], false);
        $db->closeConnection();

        return json_encode($mods);
    }
}