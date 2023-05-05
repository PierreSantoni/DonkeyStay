<div class="row p-5">
    <article>
        <h2>Résultat de la recherche</h2>
        <?php if (!$result) : ?>
            <p>Aucun Hotel ne correpond à votre recherche!</p>
        <?php else : ?>
            <?php foreach ($result as $hotel) : ?>
                <a href="/hotel/hotelDetails/<?= $hotel->hotelID; ?>" class="btn btn-info">
                    <h4 class="mb-0"><?= $hotel->hotelName; ?></h4>
                </a>
                <p><?= $hotel->hotelAdress . ", " . $hotel->hotelCity . ", " . $hotel->hotelCountry; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
        <a href="/" class="btn btn-info">Retour a l'accueil</a>
    </article>
</div>
<pre>
    <?php var_dump($_POST); ?>
    <?php
    if($_POST["reservationDebut"] < $_POST["reservationFin"]){
        echo " Début plus petit que Fin";
    }elseif($_POST["reservationDebut"] > $_POST["reservationFin"]){
        echo "Fin plus petit que Début";
    }else{
        echo "Egalité !!";
    }
    ?>
</pre>