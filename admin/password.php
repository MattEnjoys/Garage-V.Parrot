<?php
// Inclure les fichiers nécessaires
require_once __DIR__ . "/../lib/config.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/tools.php";
require_once __DIR__ . "/templates/header.php";

$errors = [];
$messages = [];
// Récupération de l'ID de l'utilisateur depuis la requête URL
if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);
} else {
    header("Location: liste_admin.php");
    exit;
}
// Récupération du nom de l'utilisateur depuis la requête URL
if (isset($_GET['nom'])) {
    $userName = urldecode($_GET['nom']);
} else {
    header("Location: liste_admin.php");
    exit;
}
// Récupération du prénom de l'utilisateur depuis la requête URL
if (isset($_GET['prenom'])) {
    $userFirstName = urldecode($_GET['prenom']);
} else {
    header("Location: liste_admin.php");
    exit;
}
// Récupération de l'email de l'utilisateur depuis la requête URL
if (isset($_GET['email'])) {
    $userEmail = urldecode($_GET['email']);
} else {
    header("Location: liste_admin.php");
    exit;
}
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newPassword = $_POST["new_password"];
    if (strlen($newPassword) < 8) {
        $errors[] = "Le nouveau mot de passe doit contenir au moins 8 caractères.";
    } else {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateQuery = "UPDATE utilisateurs SET password = :hashedPassword WHERE id = :userId";
        $updateStatement = $pdo->prepare($updateQuery);
        $updateStatement->bindParam(":hashedPassword", $hashedPassword, PDO::PARAM_STR);
        $updateStatement->bindParam(":userId", $userId, PDO::PARAM_INT);

        if ($updateStatement->execute()) {
            $messages[] = "Mot de passe mis à jour avec succès.";
        } else {
            $errors[] = "Une erreur s'est produite lors de la mise à jour du mot de passe.";
        }
    }
}
?>

<div class="row my-5">
    <h1>Profil de
        <?= $userFirstName ?>
    </h1>
    <div class="row flex-lg-row-reverse g-5 py-5">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>ID:</strong>
                <?= $userId ?>
            </li>
            <li class="list-group-item"><strong>Prénom:</strong>
                <?= $userFirstName ?>
            </li>
            <li class="list-group-item"><strong>Nom:</strong>
                <?= $userName ?>
            </li>
            <li class="list-group-item"><strong>Email:</strong>
                <?= $userEmail ?>
            </li>
        </ul>
    </div>
    <form method="post"
          action="">
        <div class="form-group">
            <label for="new_password">Modifier le mot de passe :</label>
            <input type="password"
                   class="form-control"
                   id="new_password"
                   name="new_password"
                   required>
            <button type="button"
                    id="showPassword"
                    class="btn btn-secondary">Afficher</button>
            <button type="submit"
                    class="btn btn-primary">Changer le mot de passe</button>
        </div>
    </form>
</div>

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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('new_password');
        const showPasswordButton = document.getElementById('showPassword');

        showPasswordButton.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordButton.textContent = 'Cacher';
            } else {
                passwordInput.type = 'password';
                showPasswordButton.textContent = 'Afficher';
            }
        });
    });
</script>

<?php require_once('templates/footer.php'); ?>