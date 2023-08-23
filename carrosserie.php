<?php
require_once __DIR__ . "/lib/cards.php";
require_once __DIR__ . "/templates/header.php";
?>
<!--
            ___________________________________________________________________________________________
                                                    SECTION BANNIERE
            ___________________________________________________________________________________________
        -->
<section class="ImgBannerTop">
    <!-- Image -->
    <div class="ImgBanner ImgCarrosserie d-flex justify-content-center align-items-center mb-5">
        <!-- Texte sur Image avec fond grey -->
        <div class="WhiteBackground fw-bold h1 Black text-center">
            <h1>Service Carrosserie</h1>
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
                                                    SECTION SERVICES CARROSSERIE
            ___________________________________________________________________________________________
        -->
<section class="Services p-3">
    <div class="row row-cols-1 row-cols-md-2 g-4 m-3">
        <!-- Card Service Carrosserie -->
        <?php foreach ($cards_carrosserie as $key => $card_carrosserie) { ?>
            <div class="ContentCard col d-flex justify-content-center p-3">
                <div class="card B-Grey">
                    <div class="card-body">
                        <h5 class="card-title h2 text-center text-uppercase p-2 B-Red1">
                            <?= $card_carrosserie["title"] ?>
                        </h5>
                        <p class="card-text h3-p p-2">
                            <?= $card_carrosserie["content"] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Card Fin Service Carrosserie -->
    </div>
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION SERVICES CARROSSERIE
            ___________________________________________________________________________________________
        -->
<?php
require_once __DIR__ . "/templates/footer.php";
?>