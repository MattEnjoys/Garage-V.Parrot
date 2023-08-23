<?php
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
    <div class="ImgBanner ImgContact d-flex justify-content-center align-items-center mb-5">
        <!-- Formulaire de contact -->
        <div class="d-flex justify-content-center align-items-center">
            <div class="contact-box m-2">
                <div class="LeftContact"></div>
                <div class="RightContact h1 text-center">
                    <h2>Contactez-nous</h2>
                    <input type="text"
                           class="field h2"
                           placeholder="Nom" />
                    <input type="text"
                           class="field h2"
                           placeholder="Email" />
                    <input type="text"
                           class="field h2"
                           placeholder="Téléphone" />
                    <textarea class="field h2"
                              placeholder="Message"></textarea>
                    <button class="btn btn-send">
                        Envoyer le message
                    </button>
                </div>
            </div>
        </div>
        <!-- Fin Formulaire de contact -->
    </div>
    <!-- Fin Image -->
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION BANNIERE
            ___________________________________________________________________________________________
            -->
<?php
require_once __DIR__ . "/templates/footer.php";
?>