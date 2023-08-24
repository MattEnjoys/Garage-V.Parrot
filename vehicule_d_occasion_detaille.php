<?php
require_once __DIR__ . "/lib/car.php";
$id = $_GET["id"];
// Va chercher dans le tableau "car" l'id correspondant.
$car = $cars[$id];

require_once __DIR__ . "/lib/menu.php";

$mainMenu["vehicule_d_occasion_detaille.php"] = [
    // Concaténation de title et model
    "head_title" => $car["title"] . " " . $car["model"],
    "meta_description" => substr($car["content"], 0, 100),
    "exclude" => true
];

require_once __DIR__ . "/templates/header.php";
?>
<!--
            ___________________________________________________________________________________________
                                                    SECTION DETAIL
            ___________________________________________________________________________________________
        -->
<section class="container Pink">
    <div class="row flex-lg-row-reverse justify-content-center align-items-center py-5">
        <!-- Carousel -->
        <div id="carouselExample"
             class="carousel slide mb-3">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="uploads/voitures/<?= $car["image"] ?>"
                         class="d-block ImgCar"
                         alt="<?= $car["title"] ?>" />
                </div>
                <div class="carousel-item">
                    <img src="uploads/voitures/<?= $car["image"] ?>"
                         class="d-block ImgCar"
                         alt="<?= $car["title"] ?>" />
                </div>
                <div class="carousel-item">
                    <img src="uploads/voitures/<?= $car["image"] ?>"
                         class="d-block ImgCar"
                         alt="<?= $car["title"] ?>" />
                </div>
            </div>
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExample"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Fin Carousel -->
        <!-- Texte -->
        <div class="col-lg-6">
            <div class="d-flex flex-column align-items-center">
                <h3 class="display-5 fw-bold text-body-emphasis text-center h1 Black lh-1 mb-3">
                    <?= $car["title"] ?>
                </h3>
                <h3 class="display-5 fw-bold text-body-emphasis text-center h1 Black lh-1 mb-3">
                    <?= $car["model"] ?>
                </h3>
            </div>
            <p class="lead h2-h5 Grey">
                <?= $car["content"] ?>
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="contact.php"
                   class="btn btn-order btn-lg px-4 me-md-2 h2-h5 Black m-3">
                    Nous contacter
                </a>
            </div>
            <div class="col-lg-12 price">
                <h3 class="display-5 fw-bold text-body-emphasis h1 Black lh-1 m-3 text-end">
                    <?= $car["price"] ?>
                </h3>
            </div>
        </div>
        <!-- Texte -->
        <div class="Description B-Grey p-3">
            <!-- Descriptif détaillé -->
            <table class="table">
                <thead>
                    <tr>
                        <th class="h2-h5 B-Grey m-3"
                            scope="col">
                            Descriptif détaillé
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th class="h3-p"
                            scope="row">Année :</th>
                        <td class="h3-p">
                            <?= $car["year"] ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">Energie :</th>
                        <td class="h3-p">
                            <?= $car["motorization"] ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">
                            Kilométrage :
                        </th>
                        <td class="h3-p">
                            <?= $car["kilometers"] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Fin Descriptif détaillé -->
            <!-- Equipements et options -->
            <table class="table">
                <thead class="mt-3">
                    <tr>
                        <th class="h2-h5 B-Grey m-3"
                            scope="col">
                            Equipements et Options
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= $car["option1"] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= $car["option2"] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= $car["equipement1"] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= $car["equipement2"] ?>
                        </th>
                    </tr>
                </tbody>
            </table>
            <!-- Fin Equipements et options -->
        </div>
    </div>
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION DETAIL
            ___________________________________________________________________________________________
        -->
<?php
require_once __DIR__ . "/templates/footer.php";
?>