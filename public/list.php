<?php

use App\Autoloader;
use App\models\Hotel;
use App\models\User;
use App\models\Reservation;
use App\models\Room;

require_once '../Autoloader.php';
Autoloader::register();

$user = new User;
$hotel = new Hotel;
$room = new Room;
$reza = new Reservation;

?>

<?php require 'header.php'; ?>

<pre>
######################################################################
<p>table User</p>
<?php print_r ($user->findAll()); ?>
######################################################################
<p>table Hotel</p>
<?php print_r ($hotel->findAll()); ?>
######################################################################
<p>table Room</p>
<?php print_r ($room->findAll()); ?>
######################################################################
<p>table Reservation</p>
<?php print_r ($reza->findAll()); ?>
######################################################################
</pre>

<?php require 'footer.php'; ?>