<?php
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
                    <img src="assets/images/Lamborghini Aventador.jpg"
                         class="d-block ImgCar"
                         alt="Lamborghini Aventador" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/Lamborghini Aventador.jpg"
                         class="d-block ImgCar"
                         alt="Lamborghini Aventador" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/Lamborghini Aventador.jpg"
                         class="d-block ImgCar"
                         alt="Lamborghini Aventador" />
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
                    Lamborghini
                </h3>
                <h3 class="display-5 fw-bold text-body-emphasis text-center h1 Black lh-1 mb-3">
                    Aventador LP-700-4
                </h3>
            </div>
            <p class="lead h2-h5 Grey">
                Quickly design and customize responsive mobile-first
                sites with Bootstrap, the world’s most popular
                front-end open source toolkit, featuring Sass
                variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful
                JavaScript plugins.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="assets/html/contact.html"
                   class="btn btn-order btn-lg px-4 me-md-2 h2-h5 Black m-3">
                    Nous contacter
                </a>
            </div>
            <div class="col-lg-12 price">
                <h3 class="display-5 fw-bold text-body-emphasis h1 Black lh-1 m-3 text-end">
                    18 745 €
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
                            scope="row">Anné :</th>
                        <td class="h3-p">2011</td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">Energie :</th>
                        <td class="h3-p">Essence</td>
                    </tr>
                    <tr>
                        <th class="h3-p"
                            scope="row">
                            Kilométrage :
                        </th>
                        <td class="h3-p">21 542 kms</td>
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
                            Option 1
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            Option 2
                        </th>
                    </tr>
                    <tr>
                        <th class="option h3-p"
                            scope="row">
                            Equipement 1
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