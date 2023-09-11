<?php
require_once __DIR__ . "/../lib/config.php";
// require_once __DIR__ . "/../lib/session.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/tools.php";
require_once __DIR__ . "/../lib/admin.php";
require_once __DIR__ . "/templates/header.php";

$utilisateur = false;
$errors = [];
$messages = [];
// Vérifier si l'ID de l'utilisateur à supprimer est défini dans les paramètres GET
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    // Vérifier si l'utilisateur existe dans la base de données
    if (utilisateurExists($pdo, $id)) {
        // Empêcher la suppression des utilisateurs avec l'ID 1 et 2
        if ($id <= 2) {
            $messages[] = "Vous ne pouvez pas supprimer cet utilisateur.";
        } else {
            // Supprimer l'utilisateur de la base de données
            if (deleteUtilisateur($pdo, $id)) {
                $messages[] = "L'utilisateur a été supprimé avec succès.";
            } else {
                $errors[] = "Erreur lors de la suppression de l'utilisateur.";
            }
        }
    } else {
        $errors[] = "Utilisateur introuvable.";
    }
} else {
    $errors[] = "ID de l'utilisateur non spécifié.";
}
?>
<div class="row text-center my-5">
    <h1>Supression d'un utilisateur</h1>
    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success"
             role="alert">
            <?= $message; ?>
        </div>
    <?php } ?>
    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger"
             role="alert">
            <?= $error; ?>
        </div>
    <?php } ?>
</div>

<?php
require_once('templates/footer.php');