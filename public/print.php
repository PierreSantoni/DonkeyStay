<?php

use App\models\Autoloader;
use App\models\database\Hotel;
use App\models\database\User;
use App\models\database\Reservation;
use App\models\database\Room;

require_once '../models/Autoloader.php';
Autoloader::register();

$user = new User;
$hotel = new Hotel;
$room = new Room;
$reza = new Reservation;


?>
<?php require 'header.php'; ?>
<pre>
###########################################################################
<?php print_r($user->findByID(1)); ?>
---------------------------------------------------------------------------
<?php print_r($user->findBy(["userAdmin" => 1, "userLogin" => "Login"])); ?>
---------------------------------------------------------------------------
<?php print_r($user->findAll()); ?>
###########################################################################
<?php print_r($hotel->findByID(1)); ?>
---------------------------------------------------------------------------
<?php print_r($hotel->findBy(["hotelCity" => "Paris", "hotelCountry" => "FRANCE"])); ?>
---------------------------------------------------------------------------
<?php print_r($hotel->findAll()); ?>
###########################################################################
<?php print_r($room->findByID(1)); ?>
---------------------------------------------------------------------------
<?php print_r($room->findBy(["hotelID" => 2, "roomDescription" => "Lorem blabla"])); ?>
---------------------------------------------------------------------------
<?php print_r($room->findAll()); ?>
###########################################################################
<?php print_r($reza->findByID(1)); ?>
---------------------------------------------------------------------------
<?php print_r($reza->findBy(["userID" => 2, "roomID" => 4])); ?>
---------------------------------------------------------------------------
<?php print_r($reza->findAll()); ?>
###########################################################################
</pre>
<?php require 'footer.php'; ?>