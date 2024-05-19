<?php

class Autoloader
{
    static function register()
    {
        spl_autoload_register(__CLASS__ . '::autoload');
    }

    static function autoload(string $className)
    {
        $autoload_config_path = '../config/autoloader.config.json';

        if(!file_exists($autoload_config_path)) throw new Exception('File ' . $autoload_config_path . ' cannot be found.');

        // Garde uniquement le nom de la classe lorsque cette dernière contient un namespace
        if(self::isNamespaced($className)) {
            $last_backslash_pos = strrpos($className, '\\');
            $className = substr($className, $last_backslash_pos);
        }; 

        $class_folders = json_decode(file_get_contents($autoload_config_path));

        foreach($class_folders as $folder)
        {
            $filepath = '../' . $folder .  '/' . $className . '.php';
            if(file_exists($filepath)) require $filepath;
        }
    }

    static function isNamespaced($className)
    {
        return str_contains($className, '\\');
    }
}