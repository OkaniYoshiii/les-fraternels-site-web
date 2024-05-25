<?php 

declare(strict_types=1);
$errors = [];

require_once '../config/config.local.php';

// PROJECT STRUCTURE
define('ROOT_DIR', '../');

// SRC DIRECTORY
define('APP_DIR', '../src');
define('CONTROLLERS_DIR', APP_DIR . '/controllers');
define('MODELS_DIR', APP_DIR . '/models');
define('ENTITIES_DIR', APP_DIR . '/models/Entities');
define('OBJECTS_DIR', APP_DIR . '/objects');

// PUBLIC DIRECTORY
define('ASSETS_DIR', 'assets');
define('CSS_DIR', ASSETS_DIR . '/css');
define('JS_DIR', ASSETS_DIR . '/js');
define('IMG_DIR', ASSETS_DIR . '/images');
define('TEMPLATES_DIR', 'templates');
define('TEMPLATE_PARTS_DIR', 'templates/template_parts');

define('SRC_FOLDERS', [APP_DIR, CONTROLLERS_DIR, MODELS_DIR, ENTITIES_DIR, OBJECTS_DIR]);