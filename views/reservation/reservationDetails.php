<?php

use App\models\Reservation;

?>

<div class="row">
    <section>
        <h2>Détails de la réservation N°<?= $reservation->reservationID; ?></h2>
        <article>
            <p class="mb-0">Réservation au nom de : <?= $user->userFirst . " " . $user->userLast; ?></p>
            <p class="mb-0">Concernant la chambre N°<?= $room->roomNumber; ?></p>
            <p class="mb-0">Au sein de l'établissement : <?= $hotel[0]->hotelName; ?></p>
            <p class="mb-0">Réservé du <?= $reservation->reservationDebut ?> au <?= $reservation->reservationFin ?></p>
        </article>
        <form action="" method="POST">
            <button type="submite" class="btn btn-danger" name="delete">
                Delete $this <i class="fa-solid fa-circle-xmark"></i>
            </button>
        </form>
    </section>
</div>

<?php
if (isset($_POST["delete"])) {
    (new Reservation)->delete($reservation->reservationID);
    header('location:/reservation');
}
?>