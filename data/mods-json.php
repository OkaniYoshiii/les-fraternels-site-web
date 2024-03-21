<?php

$json_file = file_get_contents('../json/mods.json');
$modsData = json_decode($json_file, true);

require '../classes/Mod.php';

$mods = array_map(function($modData) {
    return new Mod($modData);
}, $modsData);