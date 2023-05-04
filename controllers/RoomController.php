<?php
namespace App\controllers;

use App\models\Room;
use App\models\Hotel;
use App\models\Reservation;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = new Room;
        $rooms = $rooms->findAll();
        $this->render('room/index',['rooms' => $rooms]);
    }

    public function roomDetails(int $roomID)
    {
        $room = new Room;
        $room = $room->findByID($roomID);

        $hotel = new Hotel;
        $hotel = $hotel->findByID($room->hotelID);

        $reservations = new Reservation;
        $reservations = $reservations->findBy(['reservationID' => $roomID]);
        
        $this->render('room/roomDetails',['room' => $room, 'hotel' => $hotel, 'reservations' => $reservations]);
    }
}