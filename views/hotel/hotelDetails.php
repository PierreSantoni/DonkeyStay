<?php

use App\models\Hotel;
$stars = $hotel->hotelStars;
?>

<div class="row">
    <section>
        <h2><?= $hotel->hotelName; ?></h2>
            <?php for($i = 0; $i < $stars; $i++): ?>
                <i class="fa-solid fa-star"></i>
            <?php endfor; ?>
        <article>
            <p class="mb-0">Hotel <?= $stars; ?> étoiles</p>
            <p class="mb-0"><?= $hotel->hotelName . ", " . $hotel->hotelAdress . ", " . $hotel->hotelCity . ", " . $hotel->hotelCountry; ?></p>
        </article>
        <br>
        <h4>Dispose des chambres suivantes :</h4>
        <article>
            <?php foreach ($rooms as $room) : ?>
                <p class="mb-0">Numéro de chambre : <?= $room->roomNumber; ?></p>
                <p class="mb-0">Tarif: <?= $room->roomNightPrice; ?> € la nuit</p>
                <p>Description : <?= $room->roomDescription; ?></p>
            <?php endforeach; ?>
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
    (new Hotel)->delete($hotel->hotelID);
    header('location:/hotel');
}
?>