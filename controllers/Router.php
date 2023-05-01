<?php
namespace App\controllers;

use App\controllers\UserController;

class Router
{
    public function start()
    {
    echo "<pre>";
    
        //// URL = ROOT/controller/method/parametres[] ////
        $uri = $_SERVER['REQUEST_URI'];
        var_dump($uri);

        $uri = (!empty($uri) && $uri[-1] === "/") ? substr($uri, 0, -1) : $uri ;
        $params = $uri ;
        var_dump($params);

        $params = explode('/', $params);
        var_dump($params);

        array_shift($params);
        var_dump($params);

        if(strlen($params[0]) === 0){
            $controller = new DefaultController;
            $controller->index();
        }else{
            $appController = '\\App\\controllers\\'.ucfirst(array_shift($params)).'Controller';
            //$appController = ucfirst(array_shift($params)).'Controller';
            var_dump($appController);
            var_dump($params);

            $controller = new $appController;
            var_dump($controller);
            $controller->index();
            
            $action = isset($params[0]) ? array_shift($params) : 'index';
            echo"<br>";
            var_dump($action);
            var_dump($params);
            
            if(!method_exists($controller, $action)){
                http_response_code(404);
                echo "<br>Erreur 404 - La page n'existe pas<br>";
            }else{
                isset($params[0]) ? $controller->$action($params) : $controller->$action();
                //$controller->userProfil("22");
            }
        }
    
    echo "</pre>";
    }
}