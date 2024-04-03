<?php

require_once MODELS_DIR . '/Database.php';

class ModsController {
    public function getVariables() {
        $db = new Database('localhost','mods_db','root','');
        return [['name'=>'mods', 'value'=>$db->getMods()]];
    }
}