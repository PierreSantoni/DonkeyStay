<?php

use App\models\Autoloader;
use App\models\database\Hotel;
use App\models\database\User;
use App\models\database\Reservation;
use App\models\database\Room;

require_once '../models/Autoloader.php';
Autoloader::register();

$room = new room;
?>

<?php require 'header.php'; ?>
<pre>
<?php print_r($room->findBy(['roomID' => 4, 'hotelID' => 2])); ?>
##########################################################
<?php print_r($room->findAll()); ?>
</pre>
<?php require 'footer.php'; ?>