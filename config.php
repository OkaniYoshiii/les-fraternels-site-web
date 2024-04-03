<?php

declare(strict_types=1);

// Need to be changed whenever you send this in production
define('DEVMODE', true);

define('CONTROLLERS_DIR','App/controllers');
define('MODELS_DIR','App/models');
define('ENTITIES_DIR', MODELS_DIR . '/Entities');

define('HTML_DIR','templates');
define('HTML_HEAD_DIR',HTML_DIR . '/head');
define('HTML_CONTENT_DIR',HTML_DIR . '/content');

define('IMG_DIR','assets/images');
define('IMG_LOGOS_DIR',IMG_DIR . '/logos');
define('IMG_BRANDS_DIR',IMG_DIR . '/brands');
define('IMG_MODS_DIR',IMG_DIR . '/mods');
define('IMG_OTHERS_DIR',IMG_DIR . '/others');
define('IMG_STAFF_DIR',IMG_DIR . '/staff');

define('CSS_DIR','assets/css');
define('JS_DIR','assets/js');