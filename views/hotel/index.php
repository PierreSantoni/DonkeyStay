<?php
use App\models\Room;

$rooms = new Room;

?>
<div class="container-fluid">
    <h4>Utilisateurs enregistrés</h4>
    <div class="row">
        <?php foreach ($hotels as $key => $value) : ?>
            <?php
            //$room = $rooms->findByID();
            ?>

        <article>
            <h5>
                <a href="hotel/hotelProfil/<?= $value->hotelID; ?>">
                    <?= $value->hotelName; ?>
                </a>
            </h5>
            <p><?= $value->hotelStars; ?> Etoiles</p>
            <p><?= $value->hotelAdress . " ," . $value->hotelCity . " ," . $value->hotelCountry; ?></p>
        </article>

        <?php endforeach; ?>
        
    </div>
</div>