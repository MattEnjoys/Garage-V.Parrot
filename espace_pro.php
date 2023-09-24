<?php
ob_start(); // Démarre la mise en mémoire tampon
require_once __DIR__ . "/lib/css.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/user.php";

generateCssLinks($currentPage); // Appelle la fonction pour inclure les fichiers CSS

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider et nettoyer les données du formulaire
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];

    if (!$email || empty($password)) {
        $errors[] = "Veuillez remplir tous les champs.";
    } else {
        // Utilisez la variable $pdo pour préparer la requête SQL
        $query = "SELECT Id, nom, prenom, email, password, Id_role FROM utilisateurs WHERE email = ?";
        $stmt = $pdo->prepare($query); // Utilisez $pdo au lieu de $conn
        $stmt->execute([$email]); // Passez le paramètre directement dans execute

        $result = $stmt->fetch(PDO::FETCH_ASSOC); // Utilisez fetch pour obtenir le résultat sous forme de tableau associatif

        if ($result) {
            if (password_verify($password, $result["password"])) {
                // Connexion réussie
                session_start();
                $_SESSION["user_id"] = $result["Id"];
                $_SESSION["user_email"] = $result["email"];
                $_SESSION["user_nom"] = $result["nom"];
                $_SESSION["user_prenom"] = $result["prenom"];

                // Ajoutez une requête pour récupérer le nom du rôle de l'utilisateur
                $queryRole = "SELECT nom FROM roles WHERE Id = ?";
                $stmtRole = $pdo->prepare($queryRole);
                $stmtRole->execute([$result["Id_role"]]);
                $roleResult = $stmtRole->fetch(PDO::FETCH_ASSOC);

                if ($roleResult) {
                    $_SESSION["user_role"] = $roleResult["nom"];
                    echo "Rôle de l'utilisateur : " . $_SESSION["user_role"];

                    // Redirection en fonction du rôle
                    if ($_SESSION["user_role"] == 'SuperAdmin' || $_SESSION["user_role"] == 'Admin' || $_SESSION["user_role"] == 'Employé') {
                        header("Location: admin/index_admin.php");
                        exit(); // Arrête l'exécution du script ici
                    } else {
                        header("Location: index.php");
                        exit(); // Arrête l'exécution du script ici
                    }
                }
            } else {
                $errors[] = "Mot de passe incorrect.";
            }
        } else {
            $errors[] = "Aucun utilisateur trouvé avec cet email.";
        }
    }
}
ob_end_flush(); // Envoie le contenu de la mise en mémoire tampon et désactive la mise en mémoire tampon
?>


<section class="ImgBannerTop">
    <div class="ImgBanner ImgConnexion d-flex justify-content-center align-items-center mb-5">
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
                            name="loginUser">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . "/templates/footer.php";
?>