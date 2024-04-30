<?php

declare(strict_types=1);

// set_exception_handler('redirectTo404Page');

function redirectTo404Page(Throwable $exception = null) {
    http_response_code(404);
    require_once ERR_404_FILE;
    die();
}

switch ($_SERVER['SERVER_NAME']) {
    case 'localhost':
        define('SITE_URL', 'http://localhost/public/');
        break;
    case 'dev.lesfraternels.fr':
        define('SITE_URL', 'http://dev.lesfraternels.fr/public/');
        break;
    case 'lesfraternels.fr':
        define('SITE_URL', 'http://lesfraternels.fr/lesfraternels.fr/public/');
        break;
    
    default:
        define('SITE_URL', 'http://localhost/public/');
        break;
}

$errors = [];


// Need to be changed whenever you send this in production
define('DEVMODE', true);

define('APP_DIR', '../App');
define('CONTROLLERS_DIR', APP_DIR . '/controllers');
define('MODELS_DIR', APP_DIR . '/models');
define('ENTITIES_DIR', MODELS_DIR . '/Entities');

define('HTML_DIR', 'templates');
define('HTML_HEAD_DIR', HTML_DIR . '/head');
define('HTML_CONTENT_DIR',HTML_DIR . '/content');
define('TEMPLATE_PARTS_DIR', HTML_DIR . '/template-parts');

define('ERR_404_FILE', HTML_CONTENT_DIR . '/404.php');

define('IMG_DIR', 'assets/images'); 
define('IMG_LOGOS_DIR',IMG_DIR . '/logos');
define('IMG_BRANDS_DIR',IMG_DIR . '/brands');
define('IMG_MODS_DIR',IMG_DIR . '/mods');
define('IMG_OTHERS_DIR',IMG_DIR . '/others');
define('IMG_STAFF_DIR',IMG_DIR . '/staff');

define('ASSETS_DIR', 'assets');
define('CSS_DIR',ASSETS_DIR . '/css');
define('JS_DIR',ASSETS_DIR . '/js');