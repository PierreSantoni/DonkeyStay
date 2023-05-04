<?php 
namespace App\models;

class Reservation extends DataBaseModel
{
    protected int $reservationID;
    protected int $userID;
    protected int $roomID;
    protected string $reservationDebut;
    protected string $reservationFin;

    public function __construct()
    {
        $this->table = 'reservation';
    }

    /*
    //// Useless mais cool ////
    public function findRezaDetails(int $userID = null)
    {
        $rezaDetails = "SELECT * FROM reservation JOIN user ON reservation.userID = user.userID JOIN room ON reservation.roomID = room.roomID JOIN hotel ON room.hotelID = hotel.hotelID";
        if(!is_null($userID)){
            $rezaDetails .= " WHERE reservation.userID = ".$userID;
            return $this->requete($rezaDetails)->fetch();
        }
        return $this->requete($rezaDetails)->fetchAll();
    }
    */

    public function set_reservationID(int $reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    public function set_userID(int $userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function set_roomID(int $roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }

    public function set_reservationDebut(string $debut)
    {
        $this->reservationDebut = $debut;
        return $this;
    }

    public function set_reservationFin(string $fin)
    {
        $this->reservationFin = $fin;
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
        return $this->reservationDebut;
    }

    public function get_fin()
    {
        return $this->reservationFin;
    }
}