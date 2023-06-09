<?php 
namespace App\models;

class Hotel extends DataBaseModel
{
    protected int $hotelID;
    protected int $hotelStars;
    protected string $hotelName;
    protected string $hotelAdress;
    protected string $hotelCity;
    protected string $hotelCountry;

    public function __construct()
    {
        $this->table = 'hotel';
    }
    
    public function set_hotelID(int $hotelID)
    {
        $this->hotelID = $hotelID;
        return $this;
    }

    public function set_hotelStars(int $hotelStars)
    {
        $this->hotelStars = $hotelStars;
        return $this;
    }

    public function set_hotelName(string $hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    public function set_hotelAdress(string $hotelAdress)
    {
        $this->hotelAdress = $hotelAdress;
        return $this;
    }

    public function set_hotelCity(string $hotelCity)
    {
        $this->hotelCity = $hotelCity;
        return $this;
    }

    public function set_hotelCountry(string $hotelCountry)
    {
        $this->hotelCountry = $hotelCountry;
        return $this;
    }

    public function get_hotelID()
    {
        return $this->hotelID;
    }

    public function get_hotelStars()
    {
        return $this->hotelStars;
    }

    public function get_hotelName()
    {
        return $this->hotelName;
    }

    public function get_hotelAdress()
    {
        return $this->hotelAdress;
    }

    public function get_hotelCity()
    {
        return $this->hotelCity;
    }

    public function get_hotelCountry()
    {
        return $this->hotelCountry;
    }
}