<div class="container-fluid">
    <h4>Profil de : <?= $user->userFirst ." ". $user->userLast; ?></h4>
    <div class="row">
        <article>
            <h5>ID : <?= $user->userID; ?></h5>
            <h5>Fonction : <?= $user->userAdmin ? "Administrateur" : "Utilisateur"; ?></h5>
        </article>
    </div>
</div>