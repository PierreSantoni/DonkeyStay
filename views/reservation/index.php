<?php
use App\models\Hotel;
use App\models\Room;
use App\models\User;

$users = new User;
$rooms = new Room;
$hotels = new Hotel;

?>
<div class="container-fluid">
    <h4>Utilisateurs enregistrés</h4>
    <div class="row">
        <?php foreach ($reservations as $key => $value) : ?>

        <article>
            <h5>
                <a href="reservation/reservationProfil/<?= $value->reservationID; ?>">
                    Reservation N°<?= $value->reservationID; ?>
                </a>
            </h5>
            <p>
                <?php
                $user = $users->findByID($value->userID);
                $room = $rooms->findByID($value->roomID);
                $hotel = $hotels->findByID($room->hotelID);
                ?>
                La réservation N°<?= $value->reservationID; ?> concerne la chambre n°<?= $room->roomNumber; ?> de l'hotel <?= $hotel->hotelName; ?> réserver par Mr <?= $user->userFirst." ".$user->userLast; ?> du <?= $value->reservationDebut; ?> au <?= $value->reservationFin; ?>
            </p>
        </article>

        <?php endforeach; ?>
        
    </div>
</div>