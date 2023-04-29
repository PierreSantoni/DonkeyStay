<?php 
namespace App\models\database;

class Room extends DataBaseModel
{
    protected int $roomID;
    protected int $hotelID;
    protected float $roomNightPrice;
    protected string $roomDescription;
    protected string $roomPic;

    public function __construct()
    {
        $this->table = 'room';
    }

    public function set_roomID($roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }
    
    public function set_hotelID($hotelID)
    {
        $this->hotelID = $hotelID;
        return $this;
    }

    public function set_roomNightPrice($roomNightPrice)
    {
        $this->roomNightPrice = $roomNightPrice;
        return $this;
    }

    public function set_roomDescription($roomDescription)
    {
        $this->roomDescription = $roomDescription;
        return $this;
    }

    public function set_roomPic($roomPic)
    {
        $this->roomPic = $roomPic;
        return $this;
    }

    public function get_roomID()
    {
        return $this->roomID;
    }

    public function get_hotelID()
    {
        return $this->hotelID;
    }

    public function get_roomNightPrice()
    {
        return $this->roomNightPrice;
    }

    public function get_roomDescription()
    {
        return $this->roomDescription;
    }

    public function get_roomPic()
    {
        return $this->roomPic;
    }
}