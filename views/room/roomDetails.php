<?php

use App\models\Room;

?>
<div class="row">
    <h5>Chambre N°<?= $room->roomNumber; ?> de l'<?= $hotel->hotelName; ?></h5>
    <article>
        <h4>Détails de la Chambre</h4>
        <p class="mb-0">Tarif : <?= $room->roomNightPrice; ?> € la nuit</p>
        <p>Description :<br><?= $room->roomDescription; ?></p>
    </article>
    <article>
        <h4>Réservation déjà enregistrées pour cette chambre</h4>
        <?php foreach ($reservations as $reservation) : ?>
            <p class="mb-0">Reservation N°<?= $reservation->reservationID; ?></p>
            <p class="mb-0">Du <?= $reservation->reservationDebut; ?></p>
            <p class="mb-0">Au <?= $reservation->reservationFin; ?></p>
        <?php endforeach; ?>
    </article>
        <form action="" method="POST">
            <input type="submit" class="btn btn-danger" name="delete" value="Delete $this (^_^)">
        </form>
</div>

<?php
if (isset($_POST["delete"])) {
    (new Room)->delete($hotel->hotelID);
    header('location:/hotel');
}
?>