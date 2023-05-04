<div class="row">
    <h4>Utilisateurs enregistrés</h4>
    <?php foreach ($hotels as $hotelValue) : ?>
        <h5>
            <a href="hotel/hotelDetails/<?= $hotelValue->hotelID; ?>">
                <?= $hotelValue->hotelName; ?>
            </a>
        </h5>
    <?php endforeach; ?>
</div>