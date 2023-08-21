<?php
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
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Mc Laren P1.jpg"
                         class="card-img-top"
                         alt="Mc Laren P1" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">Mc Laren</h5>
                        <h5 class="h2-h5 text-center">P1</h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2009
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Hybride Rechargeable
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            18 987 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                54 328 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Lamborghini Aventador.jpg"
                         class="card-img-top"
                         alt="Lamborghini Aventador" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">
                            Lamborghini
                        </h5>
                        <h5 class="h2-h5 text-center">
                            Aventador LP-700
                        </h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2011
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Essence
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            21 542 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                18 745 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Ford Raptor.jpg"
                         class="card-img-top"
                         alt="Ford Raptor" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">Ford</h5>
                        <h5 class="h2-h5 text-center">
                            F150 SVT-Raptor
                        </h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2015
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Essence
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            38 952 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                45 971 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Dodge Charger SRT.jpg"
                         class="card-img-top"
                         alt="Dodge Charger SRT" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">Dodge</h5>
                        <h5 class="h2-h5 text-center">
                            Charger SRT HellCat
                        </h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2020
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Hybride Rechargeable
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            24 157 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                84 212 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Mc Laren P1.jpg"
                         class="card-img-top"
                         alt="Mc Laren P1" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">Mc Laren</h5>
                        <h5 class="h2-h5 text-center">P1</h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2009
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Hybride Rechargeable
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            18 987 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                54 328 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Lamborghini Aventador.jpg"
                         class="card-img-top"
                         alt="Lamborghini Aventador" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">
                            Lamborghini
                        </h5>
                        <h5 class="h2-h5 text-center">
                            Aventador LP-700
                        </h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2011
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Essence
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            21 542 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                18 745 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Ford Raptor.jpg"
                         class="card-img-top"
                         alt="Ford Raptor" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">Ford</h5>
                        <h5 class="h2-h5 text-center">
                            F150 SVT-Raptor
                        </h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2015
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Essence
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            38 952 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                45 971 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Voiture -->
            <!-- Voiture -->
            <div class="col d-flex justify-content-center">
                <div class="card m-3"
                     style="width: 18rem">
                    <img src="assets/images/Dodge Charger SRT.jpg"
                         class="card-img-top"
                         alt="Dodge Charger SRT" />
                    <div class="card-body B-Grey">
                        <h5 class="h2-h5 text-center">Dodge</h5>
                        <h5 class="h2-h5 text-center">
                            Charger SRT HellCat
                        </h5>
                        <p class="card-text Red1 h3-p">
                            Année de construction
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            2020
                        </p>
                        <p class="card-text Red1 h3-p">
                            Motorisation
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            Hybride Rechargeable
                        </p>
                        <p class="card-text Red1 h3-p">
                            Kilomètres rééls
                        </p>
                        <p class="card-text-Year text-end Red1 h3-p">
                            24 157 kms
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between m-3">
                            <p class="card-text price Black h3-p">
                                Prix
                            </p>
                            <p class="card-text-Year price Black h3-p">
                                84 212 €
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="assets/html/vehicule_d_occasion_detaille.html"
                               class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
                        </div>
                    </div>
                </div>
            </div>
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