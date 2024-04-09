<?php

declare(strict_types=1);

$errors = [];

// Need to be changed whenever you send this in production
define('DEVMODE', true);

define('CONTROLLERS_DIR','../App/controllers');
define('MODELS_DIR','../App/models');
define('ENTITIES_DIR', MODELS_DIR . '/Entities');

define('HTML_DIR', 'templates');
define('HTML_HEAD_DIR', HTML_DIR . '/head');
define('HTML_CONTENT_DIR',HTML_DIR . '/content');
define('TEMPLATE_PARTS_DIR', HTML_DIR . '/template-parts');

define('IMG_DIR', 'assets/images'); 
define('IMG_LOGOS_DIR',IMG_DIR . '/logos');
define('IMG_BRANDS_DIR',IMG_DIR . '/brands');
define('IMG_MODS_DIR',IMG_DIR . '/mods');
define('IMG_OTHERS_DIR',IMG_DIR . '/others');
define('IMG_STAFF_DIR',IMG_DIR . '/staff');

define('ASSETS_DIR','assets');
define('CSS_DIR',ASSETS_DIR . '/css');
define('JS_DIR',ASSETS_DIR . '/js');

// Database credentials (DEV)
define('DB_HOST', 'localhost');
define('DB_NAME', 'mods_db');
define('DB_USER', 'root');
define('DB_PWD', '');

// Database credentials (PROD)
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'u547807080_mods_db');
// define('DB_USER', 'u547807080_I78AyjIn');
// define('DB_PWD', '*yTmaY+v^U5');