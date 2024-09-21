<?php

namespace App\Controllers;

use App\Database;

class SingleModController {
    public function getVariables() {
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PWD);

        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];

        $variables = [['name'=>'mod', 'value'=>$db->getModByUri($uri)]];
        $db->closeConnection();
        return $variables;
    }
}