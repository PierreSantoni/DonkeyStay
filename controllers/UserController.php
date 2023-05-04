<?php
namespace App\controllers;

use App\models\Reservation;
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

        $reservations = new Reservation;
        $reservations = $reservations->findBy(['reservationID' => $userID]);
        
        $this->render('user/userProfil',['user' => $user, 'reservations' => $reservations]);
    }
}