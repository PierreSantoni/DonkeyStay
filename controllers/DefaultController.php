<?php
namespace App\controllers;

class DefaultController extends Controller
{
    public function index()
    {
        $titreProvisoire = "Bienvenue sur la page d'accueil";
        //echo $titreProvisoire;
        $this->render('default/index');
    }
}
