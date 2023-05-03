<div class="container-fluid">
    <h4>Profil de : <?= $hotel->hotelFirst ." ". $hotel->hotelLast; ?></h4>
    <div class="row">
        <article>
            <h5>ID : <?= $hotel->hotelID; ?></h5>
            <h5>Fonction : <?= $hotel->hotelAdmin ? "Administrateur" : "Utilisateur"; ?></h5>
        </article>
    </div>
</div>