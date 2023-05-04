<div class="container-fluid">
    <div class="row">
        <section>
            <h2>Détails de la réservation N°<?= $reservation->reservationID; ?></h2>
            <article>
                <p class="mb-0">Réservation au nom de : <?= $user->userFirst." ".$user->userLast; ?></p>
                <p class="mb-0">Concernant la chambre N°<?= $room->roomNumber; ?></p>
                <p class="mb-0">Au sein de l'établissement <?= $hotel[0]->hotelName; ?></p>
                <p class="mb-0">Réservé du <?= $reservation->reservationDebut ?> au <?= $reservation->reservationFin ?></p>
            </article>
        </section>
    </div>
</div>
<!--
<?php
        echo"<pre>";
        var_dump($datas);
        echo"</pre>";
?>
-->