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
    <div class="ImgBanner ImgConnexion d-flex justify-content-center align-items-center mb-5">
        <!-- Formulaire de connexion -->
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="formCo p-4 p-md-5 border rounded-3">
                    <small
                           class="text-body-secondary fw-bold text-uppercase h1 d-flex justify-content-center text-center">Mon
                        espace professionnel</small>
                    <hr class="my-4" />
                    <div class="form-floating mb-3">
                        <input type="email"
                               class="form-control"
                               id="floatingInput"
                               placeholder="name@example.com" />
                        <label class="h2-h5"
                               for="floatingInput">Adresse email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password"
                               class="form-control"
                               id="floatingPassword"
                               placeholder="Password" />
                        <label class="h2-h5"
                               for="floatingPassword">Mot de passe</label>
                    </div>
                    <div class="checkbox mb-3"></div>
                    <button class="btn btn-lg btn-order h2-h5"
                            type="submit">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
        <!-- Fin Formulaire de connexion -->
    </div>
    <!-- Fin Image -->
</section>
<!--
            ___________________________________________________________________________________________
                                                    FIN SECTION BANNIERE
            ___________________________________________________________________________________________
            -->
</main>
<?php
require_once __DIR__ . "/templates/footer.php";
?>