<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/admin.php";

$jours = getAllDays($pdo);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Traitement du formulaire de modification ici si nécessaire
    // Par exemple, vous pouvez ajouter un message de succès ou d'erreur après la modification
}
?>

<div class="row my-5">
    <div class="footer col-md-4 col-sm-12 mb-1">
        <h1 class="py-5 h1">Horaires d'ouverture</h1>
        <form method="post"
              action="modification.php">
            <ul class="nav flex-column h2">
                <?php foreach ($jours as $jour): ?>
                    <li class="nav-item mb-2">
                        <hr>
                        <p class="nav-link p-0 text-body-secondary mb-1 h2-h5">
                            <?= $jour ?> :
                        </p>
                        <p class="nav-link p-0 text-body-secondary mb-1 h2-h5">
                            <?php
                            // Vous pouvez obtenir les horaires depuis la base de données ici
                            $horaires = getOpeningHoursForDay($pdo, $jour);
                            if ($horaires) {
                                echo $horaires; // Affiche les horaires s'ils existent
                            } else {
                                echo "Fermé"; // Affiche "Fermé" si les horaires n'existent pas
                            }
                            ?>
                        </p>
                    </li>
                <?php endforeach; ?>
                <a href="modification.php"
                   class="btn d-flex justify-content-center btn-primary btn-sm ml-2">Modifier</a>
            </ul>
        </form>
    </div>
</div>

<?php require_once('templates/footer.php'); ?>