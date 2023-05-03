<?php

define('ROOT',__DIR__);

use App\Autoloader;
use App\controllers\Router;

require_once 'Autoloader.php';
Autoloader::register();

$router = new Router;
$router->start();