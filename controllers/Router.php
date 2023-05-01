<?php
namespace App\controllers;

use App\controllers\UserController;

class Router
{
    public function start()
    {
    
        //// URL = ROOT/controller/method/parametres[] ////
        $uri = $_SERVER['REQUEST_URI'];

        $uri = (!empty($uri) && $uri[-1] === "/") ? substr($uri, 0, -1) : $uri ;
        $params = $uri ;

        $params = explode('/', $params);

        array_shift($params);

        if(strlen($params[0]) === 0){
            $controller = new DefaultController;
            $controller->index();
        }else{
            $appController = '\\App\\controllers\\'.ucfirst(array_shift($params)).'Controller';

            $controller = new $appController;
            
            $action = isset($params[0]) ? array_shift($params) : 'index';

            if(!method_exists($controller, $action)){
                http_response_code(404);
                echo "Erreur 404 - La page n'existe pas";
            }else{
                isset($params[0]) ? $controller->$action($params) : $controller->$action();
            }
        }
    
    }
}