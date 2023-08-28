<?php
if ($service["photo"] === null) {
    $imagePath = _ASSETS_IMAGES_FOLDER_ . "Services_Default.jpg";
    $altText = "Pas d'image à ce service.";
} else {
    $imagePath = _ASSETS_IMAGES_FOLDER_ . htmlentities($service["photo"]);
    $altText = htmlentities($service['nom']);
} ?>
<div class="row g-0">
    <div class="col-md-6 ImgService d-flex justify-content-center align-items-center">
        <img src="<?= $imagePath ?>"
             class="img-fluid rounded"
             alt="<?= $altText ?>" />
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-between">
        <div class="TextService card-body d-flex flex-column justify-content-between">
            <h5 class="card-titleService h2-h5 text-uppercase font-italic text-center">
                <?= htmlentities($service["nom"]) ?>
            </h5>
            <p class="card-textService h2-h5 p-2 text-justify">
                <?= htmlentities($service["content"]) ?>
            </p>
            <p class="card-text1 text-end">
                <small><a href="#"
                       class="text-body-index fw-bold h2 Black">En savoir plus</a></small>
            </p>

        </div>
    </div>
</div>