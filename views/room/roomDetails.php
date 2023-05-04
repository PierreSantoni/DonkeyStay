<div class="container-fluid">
    <h5>Chambre N°<?= $room->roomNumber; ?> de l'<?= $hotel->hotelName; ?></h5>
    <div class="row">
        <article>
            <h4>Détails de la Chambre</h4>
            <p class="mb-0">Tarif : <?= $room->roomNightPrice; ?> € la nuit</p>
            <p>Description :<br><?= $room->roomDescription; ?></p>
        </article>
        <article>
            <h4>Réservation déjà enregistrées pour cette chambre</h4>
            <?php foreach($reservations as $reservation): ?>
            <p class="mb-0">Reservation N°<?= $reservation->reservationID; ?></p>
            <p class="mb-0">Du <?= $reservation->reservationDebut; ?></p>
            <p class="mb-0">Au <?= $reservation->reservationFin; ?></p>
            <?php endforeach; ?>
        </article>
    </div>
</div>