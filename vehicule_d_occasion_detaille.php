<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";

require_once __DIR__ . "/lib/menu.php";
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
        <!-- Carousel -->
        <div id="carouselExample"
             class="carousel slide mb-3">
            <div class="carousel-inner">
                <?php
                // Exemple de données d'images de voitures (à remplacer par vos données)
                $carImages = [
                    $imagePath = _CARS_IMAGES_FOLDER_ . htmlentities($voiture["photo"]),
                    $altText = htmlentities($voiture['marque_nom']) . " " . htmlentities($voiture['modele_nom']),
                    $imagePath = _CARS_IMAGES_FOLDER_ . htmlentities($voiture["photo"]),
                    $altText = htmlentities($voiture['marque_nom']) . " " . htmlentities($voiture['modele_nom']),
                    $imagePath = _CARS_IMAGES_FOLDER_ . htmlentities($voiture["photo"]),
                    $altText = htmlentities($voiture['marque_nom']) . " " . htmlentities($voiture['modele_nom'])
                ];

                // Boucle pour générer les éléments du carousel
                foreach ($carImages as $index => $imagePath) {
                    $isActive = ($index === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $isActive . '">';
                    echo '<img src="' . $imagePath . '" class="d-block ImgCar" alt="voiture" />';
                    echo '</div>';
                }
                ?>
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

        <!-- Fin Carousel -->
        <!-- Texte -->
        <div class="col-lg-6">
            <div class="d-flex flex-column align-items-center">
                <h3 class="display-5 fw-bold text-body-emphasis text-center h1 Black lh-1 mb-3">
                    <?= htmlentities($row['Marque']) ?>
                </h3>
                <h3 class="display-5 fw-bold text-body-emphasis text-center h1 Black lh-1 mb-3">
                    <?= htmlentities($row['Modele']) ?>
                </h3>
            </div>
            <p class="lead h2-h5 Grey">
                <?= htmlentities($row["Annonce_content"]) ?>
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="contact.php"
                   class="btn btn-order btn-lg px-4 me-md-2 h2-h5 Black m-3">
                    Nous contacter
                </a>
            </div>
            <div class="col-lg-12 price">
                <h3 class="display-5 fw-bold text-body-emphasis h1 Black lh-1 m-3 text-end">
                    <?= htmlentities($voitures['prix']) ?>
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
                            <?= htmlentities($voitures['annee']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">Energie :</th>
                        <td class="h3-p">
                            <?= htmlentities($voitures['modele_cylindre']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">
                            Kilométrage :
                        </th>
                        <td class="h3-p">
                            <?= htmlentities($voitures['kilometrage']) ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">
                            Transmission :
                        </th>
                        <td class="h3-p">
                            <?= htmlentities($equipements_options['transmission']) ?>
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
                            <?= htmlentities($equipements_options["nom"]) ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= $equipements_options["nom"] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= htmlentities($equipements_options["nom"]) ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            <?= htmlentities($equipements_options["nom"]) ?>
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