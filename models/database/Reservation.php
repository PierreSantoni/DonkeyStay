<?php 
namespace App\models\database;

class Reservation extends DataBaseModel
{
    protected int $reservationID;
    protected int $userID;
    protected int $roomID;
    protected string $debut;
    protected string $fin;

    public function __construct()
    {
        $this->table = 'reservation';
    }

    public function set_reservationID($reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    public function set_userID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function set_roomID($roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }

    public function set_debut($debut)
    {
        $this->debut = $debut;
        return $this;
    }

    public function set_fin($fin)
    {
        $this->fin = $fin;
        return $this;
    }

    public function get_reservationID()
    {
        return $this->reservationID;
    }

    public function get_userID()
    {
        return $this->userID;
    }

    public function get_roomID()
    {
        return $this->roomID;
    }

    public function get_debut()
    {
        return $this->debut;
    }

    public function get_fin()
    {
        return $this->fin;
    }
}