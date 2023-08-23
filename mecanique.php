<?php
require_once __DIR__ . "/lib/cards.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";
?>
<!--
            ___________________________________________________________________________________________
                                                    SECTION BANNIERE
            ___________________________________________________________________________________________
        -->
<section class="ImgBannerTop">
    <!-- Image -->
    <div class="ImgBanner ImgMecanique d-flex justify-content-center align-items-center mb-5">
        <!-- Texte sur Image avec fond grey -->
        <div class="WhiteBackground fw-bold h1 Black text-center">
            <h1>Service Mécanique</h1>
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
                                                    SECTION SERVICES MECANIQUE
            ___________________________________________________________________________________________
        -->
<section class="Services p-3">
    <div class="row row-cols-1 row-cols-md-2 g-4 m-3">
        <!-- Card Service Mecanique -->
        <?php foreach ($cards_mecanique as $key => $card_mecanique) { ?>
            <div class="ContentCard col d-flex justify-content-center p-3">
                <div class="card B-Grey">
                    <div class="card-body">
                        <h5 class="card-title h2 text-center text-uppercase p-2 B-Red1">
                            <?= $card_mecanique["title"] ?>
                        </h5>
                        <p class="card-text h3-p p-2">
                            <?= $card_mecanique["content"] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Card Fin Service Mecanique -->
    </div>
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION SERVICES MECANIQUE
            ___________________________________________________________________________________________
        -->
<?php
require_once __DIR__ . "/templates/footer.php";
?>