<?php
namespace App\controllers;

use App\models\Hotel;

class SearchController extends Controller
{
    public function index()
    {   
        var_dump($_POST);
        $list = new Hotel;
        $hotel = null;

        if(!$hotel){
            $hotel = $list->findBy(["hotelName" => $_POST["hotel"]]);
        }
        if(!$hotel){
            $hotel = $list->findBy(["hotelCountry" => $_POST["hotel"]]);
        }
        if(!$hotel){
            $hotel = $list->findBy(["hotelCity" => $_POST["hotel"]]);
        }
        if(!$hotel){
            $hotel = $list->findBy(["hotelAdress" => $_POST["hotel"]]);
        }

        $this->render('/default/search',['result' => $hotel]);
    }
}
