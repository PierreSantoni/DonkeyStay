<?php 
namespace App\models;

class Room extends DataBaseModel
{
    protected int $roomID;
    protected int $hotelID;
    protected int $roomNumber;
    protected float $roomNightPrice;
    protected string $roomDescription;
    protected string $roomPic;

    public function __construct()
    {
        $this->table = 'room';
    }

    public function set_roomID(int $roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }
    
    public function set_hotel(int $hotelID)
    {
        $this->hotelID = $hotelID;
        return $this;
    }
    
    public function set_roomNumber(int $roomNumber)
    {
        $this->roomNumber = $roomNumber;
        return $this;
    }

    public function set_roomNightPrice(float $roomNightPrice)
    {
        $this->roomNightPrice = $roomNightPrice;
        return $this;
    }

    public function set_roomDescription(string $roomDescription)
    {
        $this->roomDescription = $roomDescription;
        return $this;
    }

    public function set_roomPic(string $roomPic)
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

    public function get_roomNumber()
    {
        return $this->roomNumber;
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