<?php
namespace App\controllers;

use App\models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = new Reservation;
        $reservations = $reservations->findAll();
        $this->render('reservation/index',['reservations' => $reservations]);
    }

    public function reservationProfil(int $reservationID)
    {
        $reservation = new Reservation;
        $reservation = $reservation->findByID($reservationID);
        
        $this->render('reservation/profil',['reservation' => $reservation]);
    }
}