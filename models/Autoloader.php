<?php 
namespace App\models;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);
        $class = str_replace('\\', '/', $class);
        $file = __DIR__ . DIRECTORY_SEPARATOR . $class . ".php";
        if(file_exists($file)){
            require_once $file;
        }
    }
}