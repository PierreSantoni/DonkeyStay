<?php 
namespace App\models\database;

class Hotel extends DataBaseModel
{
    private $hotelID;
    private $hotelStars;
    private $hotelName;
    private $hotelAdress;
    private $hotelCity;
    private $hotelCountry;

    public function __construct()
    {
        $this->table = 'hotel';
    }
}