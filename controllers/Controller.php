<?php
namespace App\controllers;

abstract class Controller
{
    public function render(string $fichier, array $datas = [], string $index = "index")
    {
        /*
        echo"<pre>";
        var_dump($datas);
        echo"</pre>";
        die();
        */


        //// Fonction extract() ////
        /*
        *   extrait les données de $data['key' => 'value']
        *   les données extraitent sont sous la forme:
        *       $key = value
        */
        extract($datas);

        //// Fonction ob_start() ////
        /*
        *   ob_start() conserve tous les OUTPUT dans un tampon jusqu'a un point de sortis
        *   echo et tout ce qui en dehors des balise PHP sont des OUTPUT
        */
        ob_start();

        require_once ROOT . '/views/' . $fichier . '.php';

        //// Fonction ob_get_clean() ////
        /*
        *   Lit le contenu courant du tampon de sortie puis l'efface
        */
        $display = ob_get_clean();

        require_once ROOT . '/views/' . $index . '.php';
    }

}
