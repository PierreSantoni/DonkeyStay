<?php

use App\models\User;

$checked = null;
if($user->userAdmin){ $checked = "checked"; }

?>

<div class="row p-5">
    <article>
        <h2>Profil de : <?= $user->userFirst . " " . $user->userLast; ?></h2>
        <p class="mb-0">ID : <?= $user->userID; ?></p>
        <p class="mb-0">Fonction : <?= $user->userAdmin ? "Administrateur" : "Utilisateur"; ?></p>
    </article>
    <article>
        <h4>Réservation</h4>
        <?php foreach ($reservations as $reservation) : ?>
            <p>Reservation N°<?= $reservation->reservationID; ?> du <?= $reservation->reservationDebut; ?> au <?= $reservation->reservationFin; ?></p>
        <?php endforeach; ?>
    </article>

    <form action="" method="POST">
        <input type="hidden" name="userID" value="<?= $user->userID; ?>">
        <input type="text" name="userFirst" value="<?= $user->userFirst; ?>">
        <input type="text" name="userLast" value="<?= $user->userLast; ?>">
        <input type="checkbox" name="userAdmin" value="1" <?= $checked; ?>>
        <input type="text" name="userLogin" value="<?= $user->userLogin; ?>">
        <input type="text" name="userPass" value="<?= $user->userPass; ?>">
        <button type="submite" class="btn btn-success" name="update" value="true">
            Update $this <i class="fa-solid fa-circle-xmark"></i>
        </button>
        <button type="submite" class="btn btn-danger" name="delete">
            Delete $this <i class="fa-solid fa-circle-xmark"></i>
        </button>
    </form>
</div>


<?php
if(isset($_POST["update"])){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
if (isset($_POST["delete"])) {
    (new User)->delete($user->userID);
    header('location:/hotel');
}
?>