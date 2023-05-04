<div class="container-fluid">
    <h4>Utilisateurs enregistrés</h4>
    <div class="row">
        <?php foreach ($hotels as $hotelValue) : ?>
            <h5>
                <a href="hotel/hotelDetails/<?= $hotelValue->hotelID; ?>">
                    <?= $hotelValue->hotelName; ?>
                </a>
            </h5>
        <?php endforeach; ?>
    </div>
</div>