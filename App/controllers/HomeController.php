<?php

class HomeController {
    public function getVariables() {
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PWD);
        $variables = [['name'=>'mods', 'value'=>$db->queryPrimaryModsByReleaseDate()]];
        $db->closeConnection();
        return $variables;
    }
}