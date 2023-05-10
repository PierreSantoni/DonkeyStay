<div class="row p-5">
    <h4>Utilisateurs enregistrés</h4>
    <?php foreach ($hotels as $hotelValue) : ?>
        <h5>
            <a href="hotel/hotelDetails/<?= $hotelValue->hotelID; ?>">
                <?= $hotelValue->hotelName; ?>
            </a>
        </h5>
    <?php endforeach; ?>
</div>