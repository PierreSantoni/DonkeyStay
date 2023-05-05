<?php

use App\models\User;

$checked = null;
if($user->userAdmin){ $checked = "checked"; }

?>

<div class="row p-5">
    <article>
        <h2>Profil de : <?= $user->userFirst . " " . $user->userLast . " (ID: ". $user->userID. ")"; ?></h2>
        <p class="mb-0">Fonction : <?= $user->userAdmin ? "Administrateur" : "Utilisateur"; ?></p>
        <p class="mb-0">eMail : <?= $user->userEmail; ?></p>
    </article>
    <article>
        <h4>Réservation</h4>
        <?php foreach ($reservations as $reservation) : ?>
            <p>Reservation N°<?= $reservation->reservationID; ?> du <?= $reservation->reservationDebut; ?> au <?= $reservation->reservationFin; ?></p>
        <?php endforeach; ?>
    </article>

    <form action="" method="POST">
        <input type="hidden" name="userID" value="<?= $user->userID; ?>">

        <input type="text" id="userFirst" name="userFirst">
        <label for="userFirst">Prenom</label><br>

        <input type="text" id="userLast" name="userLast">
        <label for="userLast">Nom</label><br>

        <input type="emailsaus" id="userEmail" name="userEmail">
        <label for="userEmail">eMail</label><br>

        <label for="userAdmin">Administrateur</label>
        <input type="checkbox" id="userAdmin" name="userAdmin" value="1" <?= $checked; ?>><br>

        <input type="text" id="userLogin" name="userLogin">
        <label for="userLogin">Login</label><br>

        <input type="password" id="userPass" name="userPass">
        <label for="userPass">Mot de pass</label><br><br>

        <button type="submite" class="btn btn-success" name="update">
            Update $this <i class="fa-solid fa-circle-check"></i>
        </button><br><br>
        <button type="submite" class="btn btn-danger" name="delete">
            Delete $this <i class="fa-solid fa-circle-xmark"></i>
        </button>
    </form>
</div>


<?php
if(isset($_POST["update"])){
    $user = new User;
    $user = $user->hydrate($_POST);
    $user->update($user);
    header('location:/user');
}
if (isset($_POST["delete"])) {
    (new User)->delete($user->userID);
    header('location:/user');
}
?>