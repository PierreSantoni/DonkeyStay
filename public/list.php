<?php

use App\models\Autoloader;
use App\models\database\Hotel;
use App\models\database\User;
use App\models\database\Reservation;
use App\models\database\Room;

require_once '../models/Autoloader.php';
Autoloader::register();

$hotel = new Hotel;
?>

<?php require 'header.php'; ?>
<pre>
<?php print_r($hotel->findAll()); ?>
</pre>
<?php require 'footer.php'; ?>