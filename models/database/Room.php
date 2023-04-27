<?php 
namespace App\models\database;

class Room extends DataBaseModel
{
    private $roomID;
    private $hotelID;
    private $roomNightPrice;
    private $roomDescription;
    private $roomPic;

    public function __construct()
    {
        $this->table = 'room';
    }
}