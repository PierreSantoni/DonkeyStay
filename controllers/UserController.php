<?php
namespace App\controllers;

class UserController extends Controller
{
    public function index()
    {
        echo "Liste des Utilisateurs enregistrés";
    }

    public function userProfil(array $userID)
    {
        $userID = intval($userID[0]);
        echo "Vous etes l'utilistaeur $userID";
    }
}
