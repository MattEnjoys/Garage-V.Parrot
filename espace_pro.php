<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/user.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";

$errors = [];

// Rajouter une condition pour ne pas envoyer le formulaire si le formulaire est vide
if (isset($_POST["loginUser"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = verifyUserLoginPassword($pdo, $email, $password);
    if ($user) {
        if ($user["Id_role"] === "2") {
            header("location: admin/index_admin.php");
        } elseif ($user["Id_role"] === "3") {
            header("location: admin/index_employes.php");
        }
    } else {
        $errors[] = "Email ou mot de passe incorrect";
    }
}



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
            <form method="POST"
                  enctype="multipart/form-data"
                  class="formCo p-4 p-md-5 border rounded-3">
                <div class="col-md-10 mx-auto col-lg-5">

                    <?php foreach ($errors as $error) { ?>
                        <div class="alert alert-danger">
                            <?= $error; ?>
                        </div>
                    <?php } ?>

                    <small
                           class="text-body-secondary fw-bold text-uppercase h1 d-flex justify-content-center text-center">Mon
                        espace professionnel</small>
                    <hr class="my-4" />
                    <div class="mb-3">
                        <label class="form-label h3-p"
                               for="email">Email</label>
                        <input type="email"
                               name="email"
                               id="email"
                               class="form-control"
                               required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label h3-p"
                               for="password">Mot de passe</label>
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control"
                               required>
                    </div>
                    <div class="checkbox mb-3"></div>
                    <button class="btn btn-lg btn-order h2-h5"
                            type="submit"
                            value="Connexion"
                            name="loginUser">
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