<?php 
namespace App\models;

class Reservation extends DataBaseModel
{
    protected int $reservationID;
    protected User $user;
    protected Room $room;
    protected string $debut;
    protected string $fin;

    public function __construct()
    {
        $this->table = 'reservation';
        $this->user = new User();
        $this->room = new Room();
    }

    public function set_reservationID($reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    public function set_user(User $userID)
    {
        $this->user = $userID;
        return $this;
    }

    public function set_roomID(Room $roomID)
    {
        $this->room = $roomID;
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

    public function get_user()
    {
        return $this->user;
    }

    public function get_room()
    {
        return $this->room;
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