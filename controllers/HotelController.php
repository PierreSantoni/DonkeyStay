<?php
namespace App\controllers;

use App\models\Hotel;
use App\models\Room;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = new Hotel;
        $hotels = $hotels->findAll();
        $this->render('hotel/index',['hotels' => $hotels]);
    }

    public function hotelDetails(int $hotelID)
    {
        $hotel = new hotel;
        $hotel = $hotel->findByID($hotelID);

        $rooms = new Room;
        $rooms = $rooms->findBy(['hotelID' => $hotelID]);
        
        $this->render('hotel/hotelDetails',['hotel' => $hotel, 'rooms' => $rooms]);
    }
}