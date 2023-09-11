<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/admin.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dayId = $_POST["dayId"];
    $newHoraires = $_POST["horaires_" . $dayId];

    // Mettre à jour les horaires d'ouverture en utilisant $dayId et $newHoraires
    // Ajoutez ici la logique pour mettre à jour les horaires dans la base de données ou autre source de données

    // Redirige vers ouvertures.php après la mise à jour
    header("Location: ouvertures.php");
    exit;
}

$jours = getAllDays($pdo);
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
                            <input type="text"
                                   name="horaires_<?= $jour ?>"
                                   value="08:45 - 12:00 | 14:00 - 18:00">
                            <input type="hidden"
                                   name="dayId"
                                   value="<?= $jour ?>">
                            <button type="submit"
                                    class="btn d-flex justify-content-center btn-primary btn-sm ml-2">Modifier</button>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </form>
    </div>
</div>

<?php require_once('templates/footer.php'); ?>