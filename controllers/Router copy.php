<?php
namespace App\controllers;

use App\controllers\UserController;

class Router
{
    public function start()
    {
    echo "<pre>";

        // p=controller/method/parametres[]
        $params = $_GET["p"];
        $params = explode('/', $_GET["p"]);
        $last = count($params);
        if(strlen($params[$last-1]) === 0){array_pop($params);}

        if(strlen($params[0]) === 0){
            $controller = new DefaultController;
            $controller->index();
        }else{
            $appController = '\\App\\controllers\\'.ucfirst(array_shift($params)).'Controller';

            $controller = new $appController();

            $action = isset($params[0]) ? array_shift($params) : 'index';

            if(!method_exists($controller, $action)){
                http_response_code(404);
                echo "La page n'existe pas";
            }else{
                isset($params[0]) ? $controller->$action($params) : $controller->$action();
            }
        }

    echo "</pre>";
    }
}