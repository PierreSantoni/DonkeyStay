<?php
namespace App\controllers;

use App\models\Hotel;

class SearchController extends Controller
{
    public function index(array $search)
    {
        $hotelClass = new Hotel;
        $hotel = $hotelClass->findBy(['hotelName' => $search]);

        var_dump($hotel);

        $this->render('default/search',['hotel' => $hotel]);
    }
}
