<?php
namespace App\controllers;

use App\models\Reservation;
use App\models\Hotel;
use App\models\Room;
use App\models\User;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = new Reservation;
        $reservations = $reservations->findAll();
        $this->render('reservation/index',['reservations' => $reservations]);
    }

    public function reservationDetails(int $reservationID)
    {
        $reservation = new Reservation;
        $reservation = $reservation->findByID($reservationID);

        $users = new User;
        $users = $users->findBy(['userID' => $reservation->userID]);

        $rooms = new Room;
        $rooms = $rooms->findBy(['roomID' => $reservation->roomID]);

        $hotels = new Hotel;
        $hotels = $hotels->findBy(['hotelID' => $rooms[0]->roomID]);
        
        $this->render('reservation/reservationDetails',['reservation' => $reservation,'user' => $users,'room' => $rooms,'hotel' => $hotels]);
    }
}