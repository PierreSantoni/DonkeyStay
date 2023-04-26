<?php 
namespace App\models\database;

class Reservation extends DataBaseModel
{
    private $reservationID;
    private $userID;
    private $roomID;
    private $debut;
    private $fin;

    public function __construct()
    {
        $this->table = 'reservation';
    }
}