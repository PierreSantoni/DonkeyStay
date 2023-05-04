<?php
namespace App\controllers;

use App\models\Room;

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
        
        $this->render('room/roomDetails',['room' => $room]);
    }
}