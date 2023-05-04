<?php
namespace App\controllers;

use App\models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = new User;
        $users = $users->findAll();
        $this->render('user/index',['users' => $users]);
    }

    public function userProfil(int $userID)
    {
        $user = new User;
        $user = $user->findByID($userID);
        
        $this->render('user/userProfil',['user' => $user]);
    }
}