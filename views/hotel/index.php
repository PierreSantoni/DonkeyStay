<?php
use App\models\Room;

$rooms = new Room;
?>
<div class="container-fluid">
    <h4>Utilisateurs enregistrés</h4>
    <div class="row">
        <?php foreach ($hotels as $hotelValue) : ?>
            <?php $room = $rooms->findBy(['hotelID' => $hotelValue->hotelID]); ?>

        <article>
            <h5>
                <a href="hotel/hotelProfil/<?= $hotelValue->hotelID; ?>">
                    <?= $hotelValue->hotelName; ?>
                </a>
            </h5>
            <p>hotel <?= $hotelValue->hotelStars; ?> Etoiles</p>
            <p>Situé <?= $hotelValue->hotelAdress . " ," . $hotelValue->hotelCity . " ," . $hotelValue->hotelCountry; ?></p>
            <p><strong>Cette hotel propose les chambes suivante :</strong></p>
            <ul>
                <?php foreach ($room as $roomValue) : ?>
                    <li>La chambre n°<?= $roomValue->roomNumber; ?> à <?= $roomValue->roomNightPrice; ?> € la nuit</li>
                <?php endforeach; ?>
            </ul>
        </article>

        <?php endforeach; ?>
    </div>
</div>