<?php
require_once __DIR__ . "/lib/config.php";
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
                <form method="POST"
                      enctype="multipart/form-data">

                    <div class="RightContact h1 text-center">
                        <h2>Contactez-nous</h2>

                        <input type="text"
                               placeholder="Nom"
                               id="nom_client"
                               class="field nom_client h2"
                               name="nom_client"
                               required />

                        <input type="text"
                               placeholder="Prénom"
                               id="prenom_client"
                               class="field prenom_client h2"
                               name="prenom_client"
                               required />

                        <input type="email"
                               placeholder="Email"
                               id="email"
                               class="field email h2"
                               name="email"
                               required />

                        <input type="text"
                               placeholder="Téléphone"
                               id="telephone"
                               class="field telephone h2"
                               name="telephone"
                               required />

                        <input type="text"
                               placeholder="Sujet"
                               id="motif"
                               class="field motif h2"
                               name="motif"
                               required />

                        <textarea id="message_client"
                                  placeholder="Décrivez votre demande"
                                  name="message_client"
                                  class="field message_client h2"
                                  required>
                                </textarea>

                        <button type="submit"
                                name="submit"
                                value="Envoyer"
                                class="btn btn-send">
                            Envoyer le message
                        </button>
                    </div>
                </form>
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