<?php
namespace App\controllers;

class DefaultController extends Controller
{
    public function index()
    {
        $this->render('default/index');
    }
}
