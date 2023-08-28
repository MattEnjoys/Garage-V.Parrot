<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/car.php";
require_once __DIR__ . "/lib/customers.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";

$photos = getImages($pdo);
$services = getServices($pdo);
$customers = getCustomers($pdo);
?>
<!--
            ___________________________________________________________________________________________
                                                    SECTION BANNIERE
            ___________________________________________________________________________________________
        -->
<!-- LINKS A REPRENDRE DANS UNE FONCTION -->
<link rel="stylesheet"
      href="assets/css/reset.css">
<link rel="stylesheet"
      href="assets/css/style.css">
<section class="ImgBannerTop">
    <!-- Image -->
    <div class="ImgBanner ImgWelcome d-flex justify-content-center align-items-center mb-5">
        <!-- Texte sur Image avec fond grey -->
        <div class="WhiteBackground fw-bold h1 Black text-center">
            <h1>
                L’exellence au volant, la confiance à chaque
                kilomètre !
            </h1>
        </div>
        <!-- Fin Texte sur Image avec fond grey -->
    </div>
    <!-- Fin Image -->
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION BANNIERE
            ___________________________________________________________________________________________
        -->
<!--
            ___________________________________________________________________________________________
                                                    SECTION CARROUSSEL
            ___________________________________________________________________________________________
        -->
<section class="ModifiedContainer1 B-Pink">
    <div class="row ModifiedContainerDiv flex-lg-row-reverse align-items-center B-Pink">
        <!-- Texte -->
        <div class="col-lg-6 d-flex flex-column justifycontent-around">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 h1 text-uppercase">
                Nos dernières trouvailles
            </h1>
            <p class="lead d-flex justify-content-center text-center h2-h5">
                Toutes nos voitures d'occasions sont révisés dans
                nos ateliers et garanties 2 ans pièces et main
                d'oeuvre, pour vous garantir une sérénité optimale
                et un confort d'achat défiant toute compétition.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <div class="d-flex justify-content-center">
                    <a href="/PHP/Passage en PHP/Garage-V.Parrot/vehicules_d_occasion.php"
                       class="btn btn-order h2-h5 Black text-center">Tous nos véhicules d'occasion</a>
                </div>
            </div>
        </div>
        <!-- Fin Texte -->
        <!-- Carrousel -->
        <div class="Carousel col-10 col-sm-8 col-lg-6 m-3">
            <div id="carouselExampleAutoplaying"
                 class="carousel slide w-100"
                 data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($photos as $key => $photo) {
                        require __DIR__ . "/templates/carousel_part.php";
                    } ?>
                </div>
                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon fx-bold"
                          aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon fx-bold"
                          aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Fin Carrousel -->
    </div>
    <hr />
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION CARROUSSEL
            ___________________________________________________________________________________________
        -->
<!--
            ___________________________________________________________________________________________
                                                    SECTION SERVICES
            ___________________________________________________________________________________________
        -->
<section class="ModifiedContainer2">
    <div class="Services">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 h1 text-uppercase">
            Les services que nous proposons:
        </h1>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <!-- Service -->

            <div class="card m-3 border-0">
                <?php foreach ($services as $key => $service) {
                    require __DIR__ . "/templates/service_part.php";
                } ?>
            </div>
            <!-- Fin Service -->
        </div>
    </div>
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION SERVICES
            ___________________________________________________________________________________________
        -->
<!--
            ___________________________________________________________________________________________
            SECTION AVIS
            ___________________________________________________________________________________________
        -->
<section class="CustomersReviews">
    <!-- Laisser un avis -->
    <div class="FormReviews m-3 p-3">
        <form>
            <h5 class="card-titleReviews h1 text-center m-2">
                Espace commentaire
            </h5>
            <div class="FormRow d-flex flex-column justify-content-around">
                <input class="field h2"
                       type="text"
                       id="LastName"
                       name="LastName"
                       placeholder="Nom"
                       required />
                <input class="field h2"
                       type="text"
                       id="FirstName"
                       name="FirstName"
                       placeholder="Prénom"
                       required />
            </div>
            <div class="d-flex justify-content-center">
                <textarea id="message"
                          name="message"
                          class="field h2"
                          placeholder="Votre commentaire"
                          required></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <select class="field h2"
                        id="rating"
                        name="rating"
                        required>
                    <option class=""
                            value=""
                            disabled
                            selected>
                        Choisissez une note
                    </option>
                    <option value="1">1/5</option>
                    <option value="2">2/5</option>
                    <option value="3">3/5</option>
                    <option value="4">4/5</option>
                    <option value="5">5/5</option>
                </select>
            </div>
            <div class="btnCar d-flex justify-content-center m-3">
                <button type="button"
                        class="btn btn-order h2"
                        style="font-weight: 600">
                    Envoyer mon commentaire
                </button>
            </div>
        </form>
    </div>
    <!-- Fin Laisser un avis -->
    <!-- Avis clients -->
    <div class="Customers m-3">
        <div>
            <h5 class="card-titleCustomers h1 font-italic text-center">
                Derniers avis laissés
            </h5>
        </div>
        <div class="CardCustomers">
            <!-- Avis -->
            <?php foreach ($customers as $key => $avis) {
                require __DIR__ . "/templates/customer_part.php";
            } ?>
            <!-- Fin Avis -->
        </div>
    </div>
    <!-- Fin Avis clients -->
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION AVIS
            ___________________________________________________________________________________________
        -->
<?php
require_once __DIR__ . "/templates/footer.php";
?>