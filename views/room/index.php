<div class="container-fluid">
    <h4>Chambres Disponible</h4>
    <div class="row">
        <?php foreach ($rooms as $key => $value) : ?>
            <h5>
                <a href="room/roomDetails/<?= $value->roomID; ?>">
                    Chambre N°<?= $value->roomID; ?>
                </a>
            </h5>
        <?php endforeach; ?>
    </div>
</div>