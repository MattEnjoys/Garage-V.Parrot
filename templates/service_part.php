<div class="card m-3 border-0">
    <div class="row g-0">
        <div class="col-md-6 ImgService d-flex justify-content-center align-items-center">
            <img src="assets/images/<?= $service["image"] ?>"
                 class="img-fluid rounded"
                 alt="Service Carrosserie" />
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-between">
            <div class="TextService card-body d-flex flex-column justify-content-between">
                <h5 class="card-titleService h2-h5 text-uppercase font-italic text-center">
                    <?= $service["title"] ?>
                </h5>
                <p class="card-textService h2-h5 p-2 text-justify">
                    <?= $service["content"] ?>
                </p>
                <p class="card-text1 text-end">
                    <small><a href="assets/html/carrosserie.html"
                           class="text-body-index fw-bold h2 Black">En savoir plus</a></small>
                </p>
            </div>
        </div>
    </div>
</div>