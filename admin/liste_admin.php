<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/admin.php";
// Récupération du numéro de page depuis les paramètres GET, ou 1 si non défini
if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}
// Récupération des utilisateurs pour la page courante
$utilisateurs = getUtilisateurs($pdo, _ADMIN_ITEM_PER_PAGE_, $page);
// Récupération du nombre total d'utilisateurs dans la base de données
$totalUtilisateurs = getTotalUtilisateur($pdo);
// Calcul du nombre total de pages nécessaires pour afficher tous les utilisateurs avec la pagination
$totalPages = ceil($totalUtilisateurs / _ADMIN_ITEM_PER_PAGE_);
?>

<h1 class="py-5">Liste des utilisateurs du Back_Office</h1>
<div class="d-flex gap-2 justify-content-left py-5">
    <a class="btn btn-primary d-inline-flex align-items-left"
       href="inscription.php">
        Ajouter un nouvel employé
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse mail</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($utilisateurs as $utilisateur) { ?>
            <tr>
                <th scope="row">
                    <?= $utilisateur["Id"]; ?>
                </th>
                <td>
                    <?= $utilisateur["prenom"]; ?>
                </td>
                <td>
                    <?= $utilisateur["nom"]; ?>
                </td>
                <td>
                    <?= $utilisateur["email"]; ?>
                </td>
                <td>
                    <?php if ($utilisateur["Id"] <= 2) { ?>
                        <span>Impossible de supprimer</span>
                    <?php } else { ?>
                        <a
                           href="password.php?id=<?= $utilisateur['Id'] ?>&nom=<?= urlencode($utilisateur['nom']) ?>&prenom=<?= urlencode($utilisateur['prenom']) ?>&email=<?= urlencode($utilisateur['email']) ?>">
                            Voir le profil
                        </a>|
                        <a href="utilisateur_delete.php?id=<?= $utilisateur['Id'] ?>"
                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php if ($totalPages > 1) { ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <li class="page-item <?php if ($i === $page) {
                    echo "active";
                } ?>">
                    <a class="page-link"
                       href="?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
<?php } ?>

<?php require_once __DIR__ . "/templates/footer.php"; ?>