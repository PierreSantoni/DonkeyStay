<?php
namespace App\controllers;

class UserController
{
    public function index()
    {
        $titreProvisoire = "Liste des Utilisateurs enregistrés";
        include_once ROOT . '/views/users/index.php';
    }

    public function userProfil(array $userID = [""])
    {
        if(!$userID[0]){
            http_response_code(404);
            echo "Erreur 404 - La page n'existe pas";
        }else{
            $userID = intval($userID[0]);
            echo "Vous etes l'utilisateur $userID";
        }
    }
}