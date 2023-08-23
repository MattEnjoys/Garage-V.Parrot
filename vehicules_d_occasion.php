<?php
require_once __DIR__ . "/lib/car.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";
?>
<!--
            ___________________________________________________________________________________________
                                                    SECTION TEXTE ET FILTRE
            ___________________________________________________________________________________________
        -->
<section class="d-flex flex-column justify-content-center align-items-center B-Grey">
    <!-- Texte -->
    <div class="TextFilter text-center B-Grey">
        <h1 class="display-5 fw-bold text-body-emphasis h1">
            Faites votre selection, filtrez selon vos critères.
        </h1>
        <div class="mx-auto">
            <p class="lead 4 h2-h5 p-3">
                Mis à jour régulièrement, votre garage vous propose
                une large gamme de choix de véhicules.
            </p>
            <p class="lead 4 h2-h5 p-3">
                Révisés, nettoyés, et garantis 2 ans, nos véhicules
                sont pensés avant tout pour votre bien être et votre
                confort.
            </p>
        </div>
        <!--Filtre-->
        <div class="Filters B-Grey">
            <div class="col Kms">
                <h3 class="h2-h5 p-3">Kilomètres</h3>
                <div class="slider-container">
                    <div id="kmSlider"></div>
                    <div class="FilterKms">
                        <p class="FilterKmsDetail h3-p p-3">
                            0 Km - 200 000 Km
                        </p>
                    </div>
                </div>
            </div>
            <div class="col Prices">
                <h3 class="h2-h5 p-3">Prix</h3>
                <div class="slider-container">
                    <div id="priceSlider"></div>
                    <div class="FilterPrices">
                        <p class="FilterPricesDetail h3-p p-3">
                            0 € - 300 000 €
                        </p>
                    </div>
                </div>
            </div>
            <div class="col Years">
                <h3 class="h2-h5 p-3">Année</h3>
                <div class="slider-container">
                    <div id="yearSlider"></div>
                    <div class="FilterYears">
                        <p class="FilterYearsDetail h3-p p-3">
                            1993 - 2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttons p-2">
            <button type="button"
                    class="btn btn-order Validated btn-lg m-3">
                Valider
            </button>
            <button type="button"
                    class="btn btn-order-secondary Reinit btn-lg m-3">
                Réinitialiser
            </button>
        </div>
        <!--Fin Filtre-->
    </div>
    <!-- Fin Texte -->
</section>
<!--
            ___________________________________________________________________________________________
                                                    SECTION TEXTE ET FILTRE
            ___________________________________________________________________________________________
        -->
<!--
            ___________________________________________________________________________________________
                                                    SECTION CARS
            ___________________________________________________________________________________________
        -->
<section class="Cars d-flex flex-column justify-content-center align-items-center B-Pink">
    <div class="DivContainer">
        <div id="filteredCarsContainer"
             class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
            <!-- Voiture -->
            <?php foreach ($cars as $key => $car) {
                require __DIR__ . "/templates/car_part.php";
            } ?>
            <!-- Fin Voiture -->
        </div>
    </div>
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION CARS
            ___________________________________________________________________________________________
        -->
<?php
require_once __DIR__ . "/templates/footer.php";
?>