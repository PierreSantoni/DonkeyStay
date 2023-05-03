<?php
namespace App\controllers;

use App\models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = new Hotel;
        $hotels = $hotels->findAll();
        $this->render('hotel/index',['hotels' => $hotels]);
    }

    public function hotelProfil(int $hotelID)
    {
        $hotel = new hotel;
        $hotel = $hotel->findByID($hotelID);
        
        $this->render('hotel/profil',['hotel' => $hotel]);
    }
}