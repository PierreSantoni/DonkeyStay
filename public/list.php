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
<?php require 'footer.php'; ?>