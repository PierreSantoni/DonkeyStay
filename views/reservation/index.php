<div class="row p-5">
    <h4>Liste des Réservations</h4>
    <div class="row">
        <?php foreach ($reservations as $key => $value) : ?>
            <h5>
                <a href="reservation/reservationDetails/<?= $value->reservationID; ?>">
                    Reservation N°<?= $value->reservationID; ?>
                </a>
            </h5>
        <?php endforeach; ?>
    </div>
</div>