<div class="container-fluid">
    <h4>Utilisateurs enregistrés</h4>
    <div class="row">
        <?php foreach ($users as $key => $value) : ?>

        <article>
            <h5>
                <a href="user/userProfil/<?= $value->userID; ?>">
                    <?= $value->userFirst ." ". $value->userLast; ?>
                </a>
            </h5>

        </article>

        <?php endforeach; ?>
    </div>
</div>