<div class="card m-3 border-0">
    <?php foreach ($services as $service) {
        if ($services["photo"] === null) {
            $imagePath = _ASSETS_IMAGES_FOLDER_ . "Services_Default.jpg";
            $altText = "Pas d'image à ce service.";
        } else {
            $imagePath = _CARS_IMAGES_FOLDER_ . htmlentities($services["photo"]);
            $altText = htmlentities($services['nom']);
        }
        ?>
        <div class="row g-0">
            <div class="col-md-6 ImgService d-flex justify-content-center align-items-center">
                <img src="<?= $imagePath ?>"
                     class="img-fluid rounded"
                     alt="<?= $altText ?>" />
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-between">
                <div class="TextService card-body d-flex flex-column justify-content-between">
                    <h5 class="card-titleService h2-h5 text-uppercase font-italic text-center">
                        <?= htmlentities($services["nom"]) ?>
                    </h5>
                    <p class="card-textService h2-h5 p-2 text-justify">
                        <?= htmlentities($services["content"]) ?>
                    </p>
                    <p class="card-text1 text-end">
                        <small><a href="assets/html/carrosserie.html"
                               class="text-body-index fw-bold h2 Black">En savoir plus</a></small>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>