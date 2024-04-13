<?php

declare(strict_types=1);

$siteProtocol = (!empty($_SERVER['HTTPS'])) ? 'https://' : 'http://';
$siteBaseUrl = $siteProtocol . $_SERVER['SERVER_NAME'];

$errors = [];

// Need to be changed whenever you send this in production
define('DEVMODE', true);

define('CONTROLLERS_DIR','../App/controllers');
define('MODELS_DIR','../App/models');
define('ENTITIES_DIR', MODELS_DIR . '/Entities');

define('HTML_DIR','templates');
define('HTML_HEAD_DIR', HTML_DIR . '/head');
define('HTML_CONTENT_DIR',HTML_DIR . '/content');
define('TEMPLATE_PARTS_DIR', HTML_DIR . '/template-parts');

define('IMG_DIR', $siteBaseUrl . '/assets/images'); 
define('IMG_LOGOS_DIR',IMG_DIR . '/logos');
define('IMG_BRANDS_DIR',IMG_DIR . '/brands');
define('IMG_MODS_DIR',IMG_DIR . '/mods');
define('IMG_OTHERS_DIR',IMG_DIR . '/others');
define('IMG_STAFF_DIR',IMG_DIR . '/staff');

define('ASSETS_DIR',$siteProtocol . $_SERVER['SERVER_NAME'] . '/assets');
define('CSS_DIR',ASSETS_DIR . '/css');
define('JS_DIR',ASSETS_DIR . '/js');