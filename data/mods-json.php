<?php

$json_file = file_get_contents('../json/mods.json');
$mods = json_decode($json_file, true);