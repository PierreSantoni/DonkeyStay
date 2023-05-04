<div class="row">
    <article>
        <h2>Profil de : <?= $user->userFirst . " " . $user->userLast; ?></h2>
        <p class="mb-0">ID : <?= $user->userID; ?></p>
        <p class="mb-0">Fonction : <?= $user->userAdmin ? "Administrateur" : "Utilisateur"; ?></p>
    </article>
    <article>
        <h4>Réservation</h4>
        <?php foreach ($reservations as $reservation) : ?>
            <p>Reservation N°<?= $reservation->reservationID; ?> du <?= $reservation->reservationDebut; ?> au <?= $reservation->reservationFin; ?></p>
        <?php endforeach; ?>
    </article>
</div>