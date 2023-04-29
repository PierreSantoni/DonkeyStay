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
<?php print_r($user->findAll()); ?>

/////////////////////
// phase de CREATE //
////////////////////
<?php
$thierry = ["ID"=>3, "First"=>"Thierry", "Last"=>"Lafronde"];
$thierry = $user->hydrate($thierry);
$user->create($thierry);
print_r($user->findByID(3));
?>

///////////////////
// phase de READ //
///////////////////
<?php 
print_r($user->findAll());
?>
/////////////////////
// phase de UPDATE //
/////////////////////
<?php 
$thierry = ["Admin" =>1];
$thierry = $user->hydrate($thierry);
$user->update(3,$thierry);
print_r($user->findByID(3));
?>
/////////////////////
// phase de DELETE //
/////////////////////
<?php $user->delete(3);
print_r($user->findAll());
?>


###########################################################################
<h1>Table User</h1>
<?php print_r($user->findAll()); ?>
###########################################################################
<h1>Table Hotel</h1>
<?php print_r($hotel->findAll()); ?>
###########################################################################
<h1>Table Room</h1>
<?php print_r($room->findAll()); ?>
###########################################################################
<h1>Table Reservation</h1>
<?php print_r($reza->findAll()); ?>
###########################################################################
</pre>
<?php require 'footer.php'; ?>