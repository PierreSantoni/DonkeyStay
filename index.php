<?php

use App\Autoloader;
use App\controllers\Router;

define('ROOT', __DIR__);
require_once ROOT. DIRECTORY_SEPARATOR . 'Autoloader.php';
Autoloader::register();

$app = new Router();
$app->start();