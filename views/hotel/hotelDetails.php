<?php

use App\models\Hotel;

?>

<div class="row">
    <section>
        <h2><?= $hotel->hotelName; ?></h2>
        <article>
            <p class="mb-0">ID : <?= $hotel->hotelID; ?></p>
            <p class="mb-0">Hotel <?= $hotel->hotelStars; ?> étoiles</p>
            <p class="mb-0"><?= $hotel->hotelName . ", " . $hotel->hotelAdress . ", " . $hotel->hotelCity . ", " . $hotel->hotelCountry; ?></p>
        </article>
        <br>
        <h4>Dispose des chambres :</h4>
        <article>
            <?php foreach ($rooms as $room) : ?>
                <p class="mb-0">Numéro de chambre : <?= $room->roomNumber; ?></p>
                <p class="mb-0">Tarif: <?= $room->roomNightPrice; ?> € la nuit</p>
                <p>Description : <?= $room->roomDescription; ?></p>
            <?php endforeach; ?>
        </article>
        <form action="" method="POST">
            <input type="submit" class="btn btn-danger" name="delete" value="Delete $this (^_^)">
        </form>
    </section>
</div>

<?php
if (isset($_POST["delete"])) {
    (new Hotel)->delete($hotel->hotelID);
    header('location:/hotel');
}
?>