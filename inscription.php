<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/tools.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/user.php";
require_once __DIR__ . "/lib/menu.php";
// require_once __DIR__ . "/templates/header.php";

$errors = [];
$messages = [];

if (
    // isset($_POST['addUser']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])
    //Cela rends le code plus difficile à lire et à maintenir, il est donc préférable d'utiliser une mise en forme qui améliore la lisibilité.
    // Donc:
    // Vérifie si la clé 'addUser' existe dans les données POST.
    isset($_POST['addUser']) &&
    // Vérifie si 'prenom' existe et n'est pas vide dans les données POST.
    isset($_POST['prenom']) && !empty($_POST['prenom']) &&
    // Vérifie si 'nom' existe et n'est pas vide dans les données POST.
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    // Vérifie si 'email' existe et n'est pas vide dans les données POST.
    isset($_POST['email']) && !empty($_POST['email']) &&
    // Vérifie si 'password' existe et n'est pas vide dans les données POST.
    isset($_POST['password']) && !empty($_POST['password'])
) {
    // Si toutes les conditions ci-dessus sont remplies, cela signifie que le formulaire a été soumis avec toutes les données nécessaires.
    // Appelle la fonction 'addUser' avec les données POST fournies.
    $res = addUser($pdo, $_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['password']);

    if ($res) {
        // Si l'ajout de l'utilisateur est réussi, ajoute un message de succès.
        $messages[] = 'Nouvel employé ajouté à votre registre du personnel.';
    } else {
        // Si l'ajout de l'utilisateur échoue, ajoute un message d'erreur.
        $errors[] = 'Une erreur s\'est produite lors de votre inscription';
    }
} else {
    // Si l'une des conditions ci-dessus n'est pas remplie, ajoute un message d'erreur indiquant que tous les champs du formulaire doivent être remplis.
    $errors[] = 'Pour valider votre saisie, merci de remplir tous les champs du formulaire.';
}



?>

<h1>Inscription</h1>

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
<form method="POST">
    <div class="mb-3">
        <label for="prenom"
               class="form-label">Prénom</label>
        <input type="text"
               class="form-control"
               id="prenom"
               name="prenom">
    </div>
    <div class="mb-3">
        <label for="nom"
               class="form-label">Nom</label>
        <input type="text"
               class="form-control"
               id="nom"
               name="nom">
    </div>
    <div class="mb-3">
        <label for="email"
               class="form-label">Email</label>
        <input type="email"
               class="form-control"
               id="email"
               name="email">
    </div>
    <div class="mb-3">
        <label for="password"
               class="form-label">Mot de passe</label>
        <input type="password"
               class="form-control"
               id="password"
               name="password">
    </div>

    <input type="submit"
           name="addUser"
           class="btn btn-primary"
           value="Enregistrer">

</form>

<?php
require_once 'templates/footer.php';
?>