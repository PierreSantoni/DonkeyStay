<div class="row">
    <article>
        <h2>Résultat de la recherche</h2>
        <?php if(!$result): ?>
            <p>Aucun Hotel ne correpond à votre recherche!</p>
        <?php else: ?>
            <?php foreach($result as $hotel): ?>
                <h4 class="mb-0"><?= $hotel->hotelName; ?></h4>
                <p><?= $hotel->hotelAdress.", ".$hotel->hotelCity.", ".$hotel->hotelCountry; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </article>
</div>