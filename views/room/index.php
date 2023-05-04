<div class="row">
    <h4>Chambres Disponible</h4>
    <?php foreach ($rooms as $key => $value) : ?>
        <h5>
            <a href="room/roomDetails/<?= $value->roomID; ?>">
                Chambre N°<?= $value->roomID; ?>
            </a>
        </h5>
    <?php endforeach; ?>
</div>